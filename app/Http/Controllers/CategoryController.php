<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $suppliers = Category::all();
        return $this->createSuccessResponse($suppliers, 200);
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