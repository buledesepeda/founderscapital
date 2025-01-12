<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class investors_data_model extends Model
{
    protected $table='investors_data';
    protected $fillable=['profile_pic','name','years','risk','preferred_industry','net_worth','investable_amount'];
}
