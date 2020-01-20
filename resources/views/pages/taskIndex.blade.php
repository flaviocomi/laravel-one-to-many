@extends('layouts.base')

@section('content')

  <h2>Tasks: {{ $tasks -> count() }}</h2>

    @foreach ($tasks as $task)

      <p>
        {{ $task -> id }} {{ $task -> name }}:
        {{ $task -> employee -> name }} {{ $task -> employee -> lastname }}
      </p>
        
    @endforeach

@endsection