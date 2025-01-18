<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin_content_model extends Model
{
    protected $table='admin_content';
    protected $fillable=['aboutus','portfolio','approach','news','contact'];
}
