<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Typology;

class DoctorController extends Controller
{
    public function index(Request $request){

        $requestData = $request->all();

        $typologies = Typology::all();

        if($request->has('typology_id') && $requestData['typology_id']){

            $doctors = Doctor::with('user')
            ->select('doctors.*')
            ->join('doctor_typology', 'doctors.id', '=', 'doctor_typology.doctor_id')
            ->join('typologies', 'doctor_typology.typology_id', '=', 'typologies.id')
            ->whereIn('typologies.id', $requestData['typology_id'] )
            ->get();

            if(count($doctors) == 0) {
                return response()->json([
                    'success' => false,
                    'error' => 'A questa tipologia non corrisponde nessun ristorante',
                ]);
            }
        }else{

            $doctors = Doctor::with('user')->get();
            
        }
        return response()->json([
            'success' => true,
            'results' => $doctors,
            'typologies' => $typologies,
        ]);
    }

    public function show($slug){
        $doctors = Doctor::where('slug', 'like', '%' . $slug . '%')->with('user')->get();

        return response()->json([
            'success' => true,
            'results' => $doctors,
        ]);
    }
}
