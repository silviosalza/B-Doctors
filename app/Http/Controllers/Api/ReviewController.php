<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $review = Review::all();

        return response()->json([
            'success' => true,
            'results' => $review,
        ]);
    }
}
