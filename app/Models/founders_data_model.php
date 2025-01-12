<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class founders_data_model extends Model
{
    protected $table='founders_data';
    protected $fillable=['title','description','cofounders','problem','solution','funds','youtube','business_plan','business_model'];
}
