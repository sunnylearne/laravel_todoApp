@extends('layouts.app')

@section('title')
edit todo
@endsection

@section('content')
<h1 class="text-center m-5">Edit Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit todo </div>
                    <div class="card-body">
                    @if($errors -> any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors -> all() as $error)
                                    <li class="list-group-item">{{$error}}</li>
                                @endforeach
                            </ul>

                        </div> 

                    @endif
                            <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                            @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$todo->name}}">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control mt-3" name="description" id="" cols="30" rows="10" placeholder="description" >{{$todo->description}}</textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success mt-3">Update Todo</button>
                                </div>
                            </form>
                    </div>
            </div>
        </div>
    </div>
    
@endsection