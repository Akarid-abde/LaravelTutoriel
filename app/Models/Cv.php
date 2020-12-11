<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Cv extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $dates = ['deleted_at'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    	// laravel return $this->belongsTo('App\User');
    }
}
