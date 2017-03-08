<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{

    public function store(Request $request,$task_id, Task $task){
        
        $this->validate(request(),['body'=>'required|min:5']);

        $task->id = $task_id;

        $task->comments()->create([
            'body'=>request('body'),
            'task_id'=>request('task_id')
        ]);
        return back();
    }
}
