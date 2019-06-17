<?php

namespace App\Http\Controllers\API;

use App\Models\Avatar;
use App\User;
use DemeterChain\A;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $validator = validator()->make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|confirmed|string|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation errors', 'data' => $validator->errors()->all()]);
        }
//        $request->password = Hash::make($request->password);
        $request->merge(['api_token' => str_random(60), 'password' => Hash::make($request->password)]);
        $user = User::create($request->all());
        return response()->json(['status' => 1, 'msg' => 'register done', 'data' => $user]);
    }

    public function login(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation error', 'data' => $validator->errors()->all()]);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['status' => 0, 'msg' => 'no user with this email', 'data' => null]);
        }
        if (Hash::check($request->password, $user->password)) {
            $user = $user->api_token;
            return response()->json(['status' => 1, 'msg' => 'login done api_token', 'data' => $user]);
        } else {
            return response()->json(['status' => 0, 'msg' => 'invalid password', 'data' => null]);
        }
    }

    public function showProfile(Request $request)
    {
        $user = $request->user()->first();
        if (!$user || $user == null) {
            return response()->json(['status' => 0, 'msg' => 'no user with this token', 'data' => null]);
        }
        $data = Arr::except($user, ['password']);
        return response()->json(['status' => 1, 'msg' => 'data profile', 'data' => $data]);
    }

    public function editProfile(Request $request)
    {
        if ($request->has('name')) {
            $validator = validator()->make($request->all(), ['name' => 'string|max:255']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $request->user()->update($request->only('name'));
        }
        if ($request->has('email')) {
            $validator = validator()->make($request->all(), ['email' => 'email|string|max:255']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $request->user()->update($request->only('email'));
        }
        if ($request->has('phone')) {
            $validator = validator()->make($request->all(), ['phone' => 'string|max:255']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $request->user()->update($request->only('phone'));
        }
        if ($request->has('address')) {
            $validator = validator()->make($request->all(), ['address' => 'string|max:255']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $request->user()->update($request->only('address'));
        }
        if ($request->has('birth')) {
            $validator = validator()->make($request->all(), ['birth' => 'date_format:Y-m-d']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $request->user()->update($request->only('birth'));
        }
        if ($request->has('district_id')) {
            $validator = validator()->make($request->all(), ['district_id' => 'numeric']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $request->user()->update($request->only('district_id'));
        }
        if ($request->has('sex')) {
            $validator = validator()->make($request->all(), ['sex' => Rule::in(['male', 'female'])]);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);

            }
            $request->user()->update($request->only('sex'));
        }
        if ($request->has('describtion')) {
            $validator = validator()->make($request->all(), ['describtion' => 'string']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $request->user()->update($request->only('describtion'));
        }
        if ($request->hasFile('avatar')) {
//            file validation input
            $validator = validator()->make($request->all(), ['avatar' => 'mimes:jpeg,jpg,png,bmp']);
            if ($validator->fails()) {
                return response()->json(['status' => 0, 'msg' => 'validation invalid', 'data' => $validator->errors()->all()]);
            }
            $avatar = $request->file('avatar');
            $destinationPath = base_path() . '/uploads/users/';
            $extension = $avatar->getClientOriginalExtension();
            $name = time() . '' . rand(11111, 99999) . '.' . $extension;

            if (count($request->user()->avatars()->get()->all()) > 0) {
                //return count($request->user()->avatars()->get()->all()) ;
                foreach ($request->user()->avatars()->get()->all() as $avatar) {
                    if (file_exists('/uploads/users/' . $name))
                        unlink($avatar->path);
                    $avatar->delete();
                }
            }
            if (is_file($avatar))
                $avatar->move($destinationPath, $name);
            $request->user()->avatars()->updateOrCreate(['path' => '/uploads/users/' . $name]);
        }

        $user = $request->user()->fresh();
        $data = Arr::except($user, ['password']);
        return response()->json(['status' => 1, 'msg' => 'profile updated', 'data' => $data]);
    }

    public function listFriends(Request $request)
    {
        $users = User::paginate(6);
        $data = [];
        if (count($users) > 0) {
            foreach ($users as $user)
                array_push($data, Arr::except($user, ['password', 'api_token']));
            return response()->json(['status' => 1, 'msg' => 'friends', 'data' => $data]);
        } else {
            return response()->json(['status' => 0, 'msg' => 'no users', 'data' => null]);
        }
    }
}
    