<?php

namespace App\Http\Controllers;

use App\Supplier;

class SupplierController extends Controller
{
    public function getAllSuppliers(){
        $suppliers = Supplier::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

    public function getSuppliersByCategory($category_id){
        $suppliers = Supplier::all()->where('category_id','=', $category_id);
        return $this->createSuccessResponse($suppliers, 200);
    }

    public function getSupplierById($supplier_id){
        $supplier = Supplier::all()->where('supplier_id','=', $supplier_id);
        return $this->createSuccessResponse($supplier, 200);
    }


    public function postSupplier(){
        $suppliers = Supplier::all();
        return $this->createSuccessResponse($suppliers, 200);
    }

}