<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Typology;
use App\Models\User;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::with('user')->get();

        $typologies = Typology::all();
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
