<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function posts(){
    	return $this->belongsToMany('App\Models\Posts');
    }
}
