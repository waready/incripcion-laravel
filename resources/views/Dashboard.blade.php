@extends('layouts.app')

@section('title','Dashboard')

@section('content')
   <h1>Escritorio</h1>
   <h2>Inscripcion</h2>
   <a href="{{ route('producto.index')}}" class="btn btn-primary">incrivir</a>
 
@endsection