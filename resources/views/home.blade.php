@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido  {{ Auth::user()->name }} </div>

                <div class="panel-body">
                    
                        <h2>Inscripciones</h2>
                        <a href="{{ route('producto.index')}}" class="btn btn-warning">incrivir</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
