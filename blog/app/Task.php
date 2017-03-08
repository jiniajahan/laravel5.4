<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Task extends Model
{
    protected $fillable = ['title', 'body'];
    
    public function comments()
    {
        
        return $this->hasMany(Comment::class);
    }
}
