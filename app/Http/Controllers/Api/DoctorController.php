<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return response()->json([
            'success' => true,
            'results' => $doctors,
        ]);
    }

    public function show($slug){
        $doctors = Doctor::where('slug', 'like', '%' . $slug . '%')->get();

        return response()->json([
            'success' => true,
            'results' => $doctors,
        ]);
    }
}
