@extends('layouts.app')

@section('title','Lista de Productos')

@section('content')
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">    
    </head>
    <ol class="breadcrumb">
        <li> <a href="{{url('dashboard')}}">Escritorio</a>
        </li>
        <li class="active">Cursos</li>
    </ol>          


    <div class="row">
        <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Cursos 
                    <p class="navbar-text navbar-right" style="margin-top: 1px;">
                        <button type="button"  id="nuevo" name="nuevo" class="btn btn-warning navbar-btn" 
                        style="margin-bottom: 1px; margin-top: -5px; margin-right: 8px; padding: 3px 20px;">Nuevo</button>
                    </p>             
                </div>
                <div class="panel-body">
                                {!!Form::open(['route'=>'marca.store','method'=>'POST'])!!}
            
	        <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Nombre'])!!}
            </div>
            <div class="form-group">
                {!!form::label('Precio')!!}
                {!!form::text('costo',null,['id'=>'costo','class'=>'form-control','placeholder'=>'Digite el costo'])!!}
            </div>
        
             
                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
              <button type="button" id='cancelar'  name='cancelar' class="btn btn-info btn-sm m-t-10" >Cancelar</button>             
          {!!Form::close()!!}              
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  $("#cancelar").click(function(event)
  {
      document.location.href = "{{ route('producto.index')}}";
  });
</script>
@endsection