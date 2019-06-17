<?php

namespace App\Http\Controllers\API;

use App\Models\Mytable;
use App\Models\UserMytable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Comment\Doc;

class VisitDocController extends Controller
{
    // user add visit to doctor
    public function makeVisit(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'mytable_id' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation fails']);
        }
        if (!Mytable::where('Doctor_ID', $request->mytable_id)->get()) {
            return response()->json(['status' => 0, 'msg' => 'doctor not exist']);
        }
        $request->user()->mytables()->attach($request->mytable_id);
        return response()->json(['status' => 1, 'msg' => 'added doctor']);
    }

    public function getMyDoctors(Request $request)
    {
        $user = $request->user();
//        check if the user is exist
        if (!$user) {
            return response()->json(['status' => 0, 'msg' => 'user not exist']);
        }
        $inter_med_doctors = UserMytable::where('user_id', $request->user()->id)->pluck('mytable_id')->toArray();
        if (!$inter_med_doctors) {
            return response()->json(['status' => 0, 'msg' => 'you hove zero doctors']);
        }
        $doctors = Mytable::whereIn('Doctor_ID', $inter_med_doctors)->get();
        return response()->json(['status' => 1 , 'msg' => 'visited doctors' , 'data' => $doctors]);
    }
}
