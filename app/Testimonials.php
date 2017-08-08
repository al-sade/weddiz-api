<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $table = 'w_testimonials';
    protected $primaryKey = 'testimonial_id';
}