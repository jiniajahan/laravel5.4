@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-md-10">
                    <div class="blog-content">
                        Task Crete Form
                        <hr>
                        <form METHOD="POST" action="/tasks" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputtitle">Ttile</label>
                                <input type="text" name="title" class="form-control" id="exampleInputtitle" placeholder="title" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputbody">Body</label>
                                <input type="text" name="body" class="form-control" id="exampleInputbody" placeholder="body" required>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <hr>
                        @if(count($errors))
                        @include('error')
                            @endif
                    </div>
                </div>
        </div>
    </div>
@endsection

