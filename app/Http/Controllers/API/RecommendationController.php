<?php

namespace App\Http\Controllers\API;

use App\Models\Mytable;
use App\Models\MytableHosp;
use App\Models\RecommendDoctor;
use App\Models\RecommendHospital;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecommendationController extends Controller
{
    public function doctors(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'api_token' => 'string|max:60',
            'doctor' => 'required|array',
            'doctor.*"  => "required|string|distinct',
            'rating' => 'required|array',
            'rating.*' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation error', 'data' => $validator->errors()->all()]);
        }
//        if you have api_token
        if ($request->has('api_token')) {
            $user = User::where('api_token', $request->api_token)->first();
            for ($i = 0; $i < count($request->input('doctor')); $i++) {
//                search for doctor in doctors table and insert id here
                $recommendation = RecommendDoctor::create(['patient_id' => $user->id, 'doctor' => $request->doctor[$i], 'rating' => $request->rating[$i]]);
            }
            return response()->json(['status' => 200]);
        }
        if (!$request->has('api_token')) {
//        if request come without api_token
            for ($i = 0; $i < count($request->input('doctor')); $i++) {
//                search for doctor in doctors table and insert id here
                $recommendation = RecommendDoctor::create(['patient_id' => 0, 'doctor' => $request->doctor[$i], 'rating' => $request->rating[$i]]);
            }
            return response()->json(['status' => 200]);
        }

    }

    public function hospitals(Request $request)
    {
//        validation
        $validator = validator()->make($request->all(), [
            'api_token' => 'string|max:60',
            'hospital' => 'required|array',
            'hospital.*' => 'required|string',
            'rating' => 'required|array',
            'rating.*' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation error', 'data' => $validator->errors()->all()]);
        }
        if ($request->has('api_token')) {
            $user = User::where('api_token', $request->api_token)->first();

            for ($i = 0; $i < count($request->input('hospital')); $i++) {
//                search for doctor in doctors table and insert id here
                $recommendation = RecommendHospital::create(['patient_id' => $user->id, 'hospital' => $request->hospital[$i], 'rating' => $request->rating[$i]]);
            }
//            return RecommendHospital::first();
            return response()->json(['status' => 200]);
        }
        if (!$request->has('api_token')) {
//        if request come without api_token
            for ($i = 0; $i < count($request->input('hospital')); $i++) {
//                search for doctor in doctors table and insert id here
                $recommendation = RecommendHospital::create(['patient_id' => 0, 'hospital' => $request->hospital[$i], 'rating' => $request->rating[$i]]);
            }
            return response()->json(['status' => 200]);
        }
    }
    public function getDoctors()
    {
        $doctors = Mytable::all();
        return response()->json(['status' => 1, 'msg' => 'all doctors', 'data' => $doctors]);
    }

    public function showDoctor(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'id' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'msg' => 'validation error'
            ]);
        }
        $doctor = Mytable::where('Doctor_ID', $request->id)->first();
        if (!$doctor) {
            return response()->json(['status' => 0, 'msg' => 'doctor not found']);
        }
        return response()->json(['status' => 1, 'msg' => 'doctor , yes', 'data' => $doctor]);
    }

    public function allHospitals()
    {
        $hospitals = MytableHosp::all();
        return response()->json(['status' => 1, 'msg' => 'all hospitals', 'data' => $hospitals]);
    }

    public function showHospital(Request $request)
    {
        $validator = validator()->make($request->all(), ['id' => 'required|numeric']);
        if ($validator->fails()) {
            return response()->json(['status' => 0, 'msg' => 'validation error']);
        }
        $hospital = MytableHosp::where('Hospital_Id', $request->id)->first();
        if (!$hospital) {
            return response()->json([
                'status' => 0,
                'msg' => 'hospital does not exist'
            ]);
        }
        return response()->json(['status' => 1, 'msg' => 'hospital , yes', 'data' => $hospital]);
    }
}
