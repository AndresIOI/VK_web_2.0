@extends('layouts.app')

@section('content')
  @foreach($examen as $exa)
  <form action="{{route('examen.store')}}" method="post">
  @csrf
    <div class="form-group">
      <div class="form-control">
          <h2>{{$exa->nombre_examen}}</h2>
          <br>
          
      </div>


    </div>
  </form>

  @endforeach
@endsection
