@extends('layouts.master')

@section('title','Creacion')

@section('content')
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">    
    </head>
    <ol class="breadcrumb">
        <li> <a href="{{url('dashboard')}}">Escritorio</a>
        </li>
        <li class="active">Productos</li>
    </ol>          

@include('mensajes/mensajes')
    <div class="row">
        <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Inscripcion 
                                
                </div>
                <div class="panel-body">
                
                  {!!Form::open(['route'=>'producto.store','method'=>'POST'])!!}
            
	            <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite Nombres','required','autofocus'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Apellido')!!}
                    {!!form::text('lastname',null,['id'=>'lastname','class'=>'form-control','placeholder'=>'Digite Apellidos','required'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Celular')!!}
                    {!!form::text('cellnumber',null,['id'=>'cellnumber','class'=>'form-control','placeholder'=>'Digite celular'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Email')!!}
                    {!!form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Digite correo'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Nivel')!!}
                    {!!form::text('nivel',null,['id'=>'nivel','class'=>'form-control','placeholder'=>'Digite celular'])!!}
                </div>
                <div class="form-group">
                  {!!form::label('Pago')!!}
                  {!!form::text('price',null,['id'=>'price','class'=>'form-control','placeholder'=>'Digite el Precio','required'])!!}
                </div>
                <div class="form-group">
                    {!!form::label('Curso')!!}
                    {!! Form::select('marks_id',$marks,null,['id'=>'marks_id','class'=>'form-control','placeholder'=>'Elija el curso','required'])!!}
                </div>
                 {!!form::submit('Grabar',
                 ['name'=>'grabar','id'=>'grabar',
                 'content'=>'<span>Grabar</span>',
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