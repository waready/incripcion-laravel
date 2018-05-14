@extends('layouts.app')

@section('title','Lista de Productos')

@section('content')
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">    
    </head>
    <ol class="breadcrumb">
        <li> <a href="{{url('dashboard')}}">Escritorio</a>
        </li>
        <li class="active">Inscritos</li>
    </ol>          


    <div class="row">
        <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Cursos
                    <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                        <button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn"
                         style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;"><a href="{{ route('marca.create')}}">nuevo</a></button>
                    </p>
            
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>costo</th>
                                                   
                        </thead>
                        <tbody>
                             @foreach($markss as $marka)
                                <tr>
                                <td>{{$marka->id}}</td>
                                <td>{{$marka->name}}</td>
                                 
                                <td>{{$marka->costo}}</td>    
                                                   
                                </tr>
                                
                            @endforeach
                            
                        </tbody>

                    </table>                
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$("#nuevo").click(function(event)
  {
     // document.location.href = "{{ route('producto.create')}}";
  });
</script>
@endsection