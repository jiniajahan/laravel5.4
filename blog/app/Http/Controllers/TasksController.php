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

            $tasks = Task::all();



            $archives = Task::where( DB::raw('MONTH(created_at)'), '=', date('n') )
                ->get()
                ->toArray();

//            dd($archives);

            return view('task.index', compact('tasks', 'archives'));

        } catch (\Exception $e) {
            throw $e;
        }
    } 
    
    public function create()
    {
            return view('task.create');
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

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title'=>'required| min:5',
            'body'=>'required| min:20'

        ]);
        $tasks = new Task();

        $tasks->title = $request->title;
        $tasks->body = $request->body;
        $tasks->save();

        return redirect('/tasks');
    }
}
