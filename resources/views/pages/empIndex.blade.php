@extends('layouts.base')

@section('content')

  <h2>Employee: {{ $emps -> count() }}</h2>

  <ul>

    @foreach ($emps as $emp)

      <li>
        {{ $emp -> name }} {{ $emp -> lastname }}:
        {{ $emp -> tasks() -> count() }}
      </li>
        
    @endforeach
  
  </ul>
    
@endsection