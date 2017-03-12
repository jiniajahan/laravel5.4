@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-md-10">
                    @foreach($tasks as $task)
                    <div class="blog-content">
                        <div class="blogs-list">
                            <a href="/tasks/{{$task->id}}"><h2>{{$task->title}}</h2></a>
                            <p>{{$task->body}}</p>
                        </div>
                        <p>{{$task->created_at->diffForHumans()}}</p>
                        <hr>
                    </div>
                    @endforeach
                </div>
            <div class="col-md-2">
                @include('task.archives')
            </div>
        </div>
    </div>
@endsection

