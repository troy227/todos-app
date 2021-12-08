@extends('layouts.app')
@section('title')
    TODOS LIST
@endsection
@section('content')

    <div class="container">
        <h1 class="text-center my-5" >TODOS</h1>
        <div class="row justify-content-center">
            <div class="col-md8 offset-md2">
                <div class="card card-default">
                    <div class="card-header">
                        TODOS
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                                <li class="list-group-item">
                                    {{$todo->name}}

                                    <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>
                                    @if(!$todo->Completed)
                                        <a href="/todos/{{$todo->id}}/complete" class="btn btn-success btn-sm float-right mr-4">Complete</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
