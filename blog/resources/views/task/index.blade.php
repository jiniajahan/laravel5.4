<style>
    .menu{

        background-color: rgba(0,0,0,0.5);
    }
    .collapse .nav li a{
        color: #ffffff;
        font-size: 14px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .collapse .nav li a:hover{
        color: #000;
    }
    .card-block{
        border: 1px solid rgba(0,0,0,0.1);
        padding: 20px;
    }
    .card-block input.form-control{
        height: 50px;!important;
    }
</style>
@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($tasks as $task)
                <div class="col-md-10">
                    <div class="blog-content">
                        <div class="blogs-list">
                            <h2>{{$task->title}}</h2>
                            <p>{{$task->body}}</p>
                        </div>
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

