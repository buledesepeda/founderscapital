<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin_model extends Model
{
    protected $table='admin_data';
    protected $fillable=[
        'about','portfolio','approach','news','contact'
    ];
}
