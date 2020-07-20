@extends('layouts.app')
    @section('content')
        <div class="card" style="width: 60%;">
        <div class="card-body">
            <div class="card-title block"><span class='h5'>{{$todo->text}}</span>
            <a href="/" class="btn btn-dark float-right">Go Back</a>
            </div>
            <h6 class="card-subtitle mb-2 text-muted">Due Date:  {{$todo->due}}</h6>
            <p class="card-text">{{$todo->body}}</p>
                <div class="form-group">
                    <a href="/todo/{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action' => ['TodosController@destroy',$todo->id], 'method'=>'POST', 'class'=>'float-right'])!!}
                    {{ Form::hidden('_method','DELETE') }}
                    {{ Form::bsSubmit('Delete',['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
        </div>
        </div>
    @endsection