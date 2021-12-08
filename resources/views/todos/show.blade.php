@extends('layouts.app')

@section('title')
{{$todo->name}}
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center my-5">
            {{$todo->name}}
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        DETAILS
                    </div>
                    <div class="card-body">
                        {{$todo->Description}}
                    </div>
                </div>

                <a href="{{$todo->id}}/edit" class="btn btn-primary my-2 btn-sm float-right">EDIT</a>
                <a href="{{$todo->id}}/delete" class="btn btn-danger my-2 btn-sm float-right">DELETE</a>
            </div>
        </div>
    </div>
@endsection
