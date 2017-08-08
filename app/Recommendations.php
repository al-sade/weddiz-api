<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendations extends Model
{
    protected $table = 'w_reco_cat';
    protected $primaryKey = 'category_id';
}