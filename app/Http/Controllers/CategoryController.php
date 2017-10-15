<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $suppliers = Category::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

}