<?php

namespace App\Http\Controllers\API;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Comment;

class SettingController extends Controller
{
    public function welcome()
    {
        $settings = Setting::first();
        if ($settings == null) {
            return response()->json(['status' => 0, 'msg' => 'no setting of welcome screen .', 'data' => null]);
        }
        return response()->json(['status'=> 1 , 'msg' => 'setting of welcome screen .', 'data' => $settings]);
    }

    public function  contact(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required|string'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'msg' => 'validation fails',
                'data' => $validator->errors()->all()
            ]);
        }
        $contact = Contact::create($request->all());
        return response()->json(['status' => 1 , 'msg' => 'contact sent' , 'data' => $contact]);
    }
}
