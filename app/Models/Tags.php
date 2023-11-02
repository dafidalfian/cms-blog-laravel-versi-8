<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $guarded = [];
    public function posts(){
    	return $this->belongsToMany(Posts::class, 'posts_tags', 'tags_id', 'posts_id');
    }
}
