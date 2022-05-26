<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function about(){
	    return $this->hasMany('App\Models\About', 'id');
    }
}
