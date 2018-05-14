@extends('layouts.master')

@section('title','Productos')

@section('content')
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">    
    </head>
    <ol class="breadcrumb">
        <li> <a href="{{url('dashboard')}}">Escritorio</a>
        </li>
        <li class="active">Inscritos:</li>
    </ol>          


    <div class="row">
         @include('mensajes.mensajes')  
        <div class="container">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Busqueda Modal
                </button>
                <a href="{{url('excel')}}" class="btn btn-success"> exportar (Excel)</a>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    {!! Form::open(['route' => 'producto.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
                        <div class="form-group">                    
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    {!!Form::close()!!}   
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Busqueda</h5>
                     
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--button type="button" class="btn btn-primary">Save changes</button-->
                </div>
                </div>
            </div>
            </div>
        
                <!--form class="navbar-form navbar-left pull-right" role="search"-->
                {!! Form::open(['route' => 'producto.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                    <div class="form-group">
                        
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}
                    
                    <!--input type="text" class="form-control" placeholder="Buscar"-->
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                {!!Form::close()!!}   
        <div class="col-md-12">
           
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    Lista de Inscritos 
                    <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                       <button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn"
                        style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">
                        <a href="{{ route('producto.create')}}">Inscrivir</a></button>
                        
                        <button type="button" id="nuevo" name="nuevo" class="btn btn-warning navbar-btn" 
                        style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">
                        <a href="{{ route('marca.index')}}">Agregar Un curso</a></button>
                    </p>
                    
                </div>
               
                <div class="panel-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>N° celular</th>
                            <th>Correo</th>
                            <th>Nivel</th>
                            <th>Curso</th>
                            <th>MONT. PAGA</th>
                            <th>Saldo</th>
                            <th>Eliminar|Editar</th>                        
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                               
                                <tr>
                                
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->products}}</td>
                                <td>{{$producto->lastname}}</td>
                                <td>{{$producto->cellnumber}}</td>  
                                <td>{{$producto->email}}</td>
                                <td>{{$producto->nivel}}</td>
                                <td>{{$producto->mark}}</td>
                                <td>S./{{$producto->price}}</td>
                                <td>S./{{ $producto->costo - $producto->price}}</td>
                                
                                
                                <!--td>{{$producto->toJson()}}</td-->
                                <td>
                                    <a href="{{route('producto.show',$producto->id)}}">[Eliminar]</a><a href="{{route('producto.edit',$producto->id)}}">[Editar]</a>
                                </td>            
                                                   
                                </tr>
                                
                            @endforeach
                            
                        </tbody>

                    </table> 
                    <div class="text-center">
                        {!!$productos->links()!!}
                    </div>               
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