<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $dates = ['deleted_at'];
}
