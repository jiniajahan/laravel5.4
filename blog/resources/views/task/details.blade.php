@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-md-10">
                    <div class="blog-content">
                        <div class="blogs-list">
                            <h2>{{$task->title}}</h2>
                            <p>{{$task->body}}</p>
                        </div>
                        <hr>
                    </div>
                    <div class="comments">
                        @foreach($task->comments as $comment)
                            <ul>
                                <li class="list-group-item">
                                    <strong>
                                        {{$comment->created_at->diffForHumans()}}
                                    </strong>
                                    {{$comment->body}}
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
@endsection

