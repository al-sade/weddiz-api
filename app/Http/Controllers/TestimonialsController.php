<?php

namespace App\Http\Controllers;

use App\Testimonials;

class TestimonialsController extends Controller
{
    public function getTestimonials(){
        $testimonials = Testimonials::all();
        return $this->createSuccessResponse($testimonials, 200);
    }

    public function getTestimonialsBySupplier($supplier_id){
        $testimonials = Testimonials::find($supplier_id);
        if($supplier_id){
        return $this->createSuccessResponse($testimonials, 200);
        }

        return $this->createErrorMessage("Supplier has no testimonials", 404);
    }

    public function postTestimonial(){
        $testimonials = Testimonials::all();
        return $this->createSuccessResponse($testimonials, 200);
    }

}