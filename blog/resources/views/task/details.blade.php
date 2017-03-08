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
                    <hr>
                    <div class="card">
                        <div class="card-block">
                            <form method="POST" action="/tasks/{{$task->id}}/comments">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="body" placeholder="your comment here" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @include('error')
                </div>
        </div>
    </div>
@endsection

