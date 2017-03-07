<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{

    public function index()
    {

        try {
//            $tasks = \DB::table('tasks')->get();

            $tasks = Task::all();
            return view('task.index', compact('tasks'));

        } catch (\Exception $e) {
            throw $e;
        }
    } 
    
    public function show($id)
    {

        try {
//            $task = DB::table('tasks')->find($id);

            $task = Task::find($id);
            return view('task.details', compact('task'));

        } catch (\Exception $e) {
            throw $e;
        }
    }
}
