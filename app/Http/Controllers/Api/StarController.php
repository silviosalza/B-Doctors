<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Star;


class StarController extends Controller
{
    public function index(){
        
        $star = Star::with('doctors')->get();

        return response()->json([
            'success' => true,
            'results' => $star,
        ]);
    }
}
