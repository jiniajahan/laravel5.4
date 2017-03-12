<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $tasks = $tag->tasks;

        return view('task.index', compact('tasks'));
    }
}
