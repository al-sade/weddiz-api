<?php

namespace App\Http\Controllers;

use App\Supplier;

class SupplierController extends Controller
{
    public function getAllSuppliers(){
        $suppliers = Supplier::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

    public function getSuppliers($category_id){
        $suppliers = Supplier::all()->where('category_id','=', $category_id);
        return $this->createSuccessResponse($suppliers, 200);
    }

//    TODO: pass category id and query for all category suppliers
    public function getSuppliersByCategory(){
        $suppliers = Supplier::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

    public function postSupplier(){
        $suppliers = Supplier::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

}