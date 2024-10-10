<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        $paltforms = Review::select('platform')->groupBy('platform')->get();
        $all_reviews = Review::all();

        $sorted_review = [];

        foreach ($all_reviews as $item) {
            $sorted_review[$item->platform][] = $item;
            $sorted_review['all'][] = $item;
        }

        return [
            'platforms' => $paltforms,
            'reviews' => $sorted_review
        ];
    }
}