<?php

namespace App\Http\Controllers\API;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'content' => 'string',
            'receiver_id' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation fails', 'data' => $validator->errors()->all()]);
        }
//        return $request->user();
        $message = $request->user()->messages()->create($request->all());
        return $message;
        return response()->json(['status' => 1, 'msg' => 'send', 'data' => $message]);
    }

// inbox
    public function inbox(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'receiver_id' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation fails', 'data', $validator->errors()->all()]);
        }
        $messages = $request->user()->messages()->where('receiver_id', $request->receiver_id)->orderBy('created_at', 'DESC')->get();
        return response()->json(['status' => 1, 'msg' => 'inbox messages', 'data' => $messages]);
    }

    public function seen(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'message_id' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation fails', 'data' => $validator->errors()->all()]);
        }
        $message = Message::where('id', $request->message_id)->get()->first();
//        return $message->receiver_id;
        if ($message && $message->receiver_id == $request->user()->id) {
            $message->seen = 1;
            $message->save();
            return response()->json(['status' => 1, 'msg' => 'message seen', 'data' => null]);
        }
        return response()->json(['status' => 0, 'msg' => 'check api_token or message_id', 'data' => null]);
    }

    public function userMessages(Request $request)
    {
        $user_id = $request->user()->id ;
        $messages  = Message::where('sender_id' , $user_id)->orWhere('receiver_id' ,$user_id)->orderBy('created_at','DESC')->get();
        if (count($messages)==0){
            return response()->json(['status' => 0 ,'msg' => 'no messages', 'data' => null]);
        }
        return response()->json(['status' => 1 , 'msg' => 'your messages' , 'data' => $messages]);
    }

}
