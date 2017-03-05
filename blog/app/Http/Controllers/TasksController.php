<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;

class TasksController extends Controller
{

    public function __construct()
    {
        $this->model =Task::class;
    }

    public function index()
    {

        try {
            $tasks = \DB::table('tasks')->get();
            return view('task.index', compact('tasks'));

        } catch (\Exception $e) {
            throw $e;
        }
    }
}
