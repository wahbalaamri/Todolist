@extends('layouts.app')
@section('content')
  
    @if (count($todos)>0)
        <div class="card" style="width: 40%;">
            <div class="card-header">
                <h1>Todos</h1>
            </div>
            <ul  class="list-group list-group-flush">
                @foreach ($todos as $todo )
                
                    <li class="list-group-item"><a href='todo/{{$todo->id}}'>{{$todo->text}}</a>
                    <label class='float-right text-danger'>{{$todo->due}}</label>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection