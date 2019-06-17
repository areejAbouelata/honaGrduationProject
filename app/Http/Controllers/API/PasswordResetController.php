<?php

namespace App\Http\Controllers\API;

use App\Models\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    public function create(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'email' => 'required|string|email'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation error', 'data' => $validator->errors()->all()]);
        }
        $user = User::where('email', $request->email)->first();

        if (!$user || $user == null) {
            return response()->json(['status' => 0, 'msg' => 'email not found', 'data' => null]);
        }
        $passwordReset = PasswordReset::updateOrCreate(['email' => $request->email, 'token' => str_random(15), 'user_id' => $user->id]);

//        return $user    ;
        Mail::send('emails.reset_password', ['data' => $passwordReset->token], function ($message) use ($user) {
            $message->from('honaBot@gmail.com');
            $message->to($user->email, 'hona')->subject('Reset password!');
        });
        return response()->json(['status' => 1, 'msg' => 'token sent', 'data' => null]);

    }

    public function find($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();
        if (!$passwordReset) {
            return response()->json(['status' => 0, 'msg' => 'token invalid', 'data' => null]);
        }
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return response()->json([
                'status' => 0,
                'msg' => 'this password reset token is invalid',
                'data' => null
            ]);
        }
        return response()->json(['status' => 1, 'msg' => 'token and password', 'data' => $passwordReset]);
    }

    public function reset(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'email' => 'required|string|email',
//            'token' => 'required|string|max:15',
            'password' => 'required|string|confirmed|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation fails', 'data' => $validator->errors()->all()]);
        }
//        ->where('email' , $request->email)
        $passwordReset = PasswordReset::where('email', $request->email)->first();
        if (!$passwordReset) {
            return response()->json(['status' => 0, 'msg' => 'no such password or token', 'data' => null]);
        }
        $user = User::where('id', $passwordReset->user_id)->first();
        if (!$user) {
            return response()->json(['status' => 0, 'msg' => 'no such a user', 'data' => null]);
        }
        $user->password = bcrypt($request->password);
        $user->save();
        $passwordReset->delete();
        return response()->json(['status' => 1, 'msg' => 'password changed', 'data' => null]);
    }
}
