<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Comment extends Model
{
    protected $fillable = ['body'];
    public function task()
    {
        return $this->belongsTo(Task::class);

    }
}
