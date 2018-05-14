@extends('layouts.master')

@section('title','Eliminar')

@section('content')
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">    
    </head>
    <ol class="breadcrumb">
        <li> <a href="{{url('dashboard')}}">Escritorio</a>
        </li>
        <li class="active">Productos</li>
    </ol>          


    <div class="row">
        <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                Eliminar
                           
                </div>
                <div class="panel-body">
                
         {!!Form::open(['route'=>['producto.destroy',$producto->id],'method'=>'DELETE'])!!}
          
	      <div class="form-group">
                 <label for="exampleInputPassword1">Desea eliminar este registro</label> 
             </div>
             <div class="form-group">
                {!!form::label('Nombre')!!}
                {!! $producto->name !!}
             </div>
             <div class="form-group">
                {!!form::label('lastname')!!}
                {!! $producto->lastname !!}
             </div>
             <div class="form-group">
                {!!form::label('cellnumber')!!}
                {!! $producto->price !!}

             </div><div class="form-group">
                {!!form::label('Email')!!}
                {!! $producto->email !!}
             </div>
             <div class="form-group">
                {!!form::label('Nivel')!!}
                {!! $producto->nivel !!}
             </div>
             
             <div class="form-group">
                {!!form::label('Pago')!!}
                {!! $producto->price !!}
             </div>
                 {!!form::submit('Eliminar',['name'=>'grabar',
                 'id'=>'grabar','content'=>'<span>Eliminar</span>',
                 'class'=>'btn btn-warning btn-sm m-t-10'])!!}
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