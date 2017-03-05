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
                </div>
        </div>
    </div>
@endsection

