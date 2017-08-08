<?php

namespace App\Http\Controllers;

use App\Recommendations;

class RecommendationsController extends Controller
{
    public function getRecommendations(){
        $recommendations = Recommendations::all();
        return $this->createSuccessResponse($recommendations, 200);
    }

//    TODO: pass category id and query for all category suppliers
//    public function getCategorysByCategory(){
//        $suppliers = Category::all();
//        return $this->createSuccessResponse($suppliers, 200);
//    }
//
//    public function postCategory(){
//        $suppliers = Category::all();
//        return $this->createSuccessResponse($suppliers, 200);
//    }

}