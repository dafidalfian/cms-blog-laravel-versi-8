<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class posts extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function category(){
    	return $this->belongsTo(Category::class);
    }
    public function tags(){
    	return $this->belongsToMany(Tags::class);
    }
    public function users(){
    	return $this->belongsTo('App\Models\User','user_id','id');
    }
}
