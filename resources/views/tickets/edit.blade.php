@extends('master')
@section('title','Edit Ticket')
@section('content')
<div class="container">
  <div class="content">
    <div class="title">Edit Ticket</div>
      


<form class="form-horizontal"  method="post" >
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>     
    @endforeach 

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>     
    @endif

{!! csrf_field() !!} 

                <fieldset>
                    <legend>Editar Ticket</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Título</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title" value = "{!! $ticket->title !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Contenido</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content">{{ $ticket->content }}</textarea>
                            <span class="help-block">Edita un ticket.</span>
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                            <input type="checkbox" name="status" value ="0" > ¿Cerrar este Ticket?
                            <div><p></p></div>
                            <div class="help-block"><p>Seguro?! wn no la vallas a cagar!</p></div>
                        </label>
                       </div>
                    </div>
                    
                    <div class="form-group">
                        <div>
                            <a class="btn btn-default" href = "/tickets">Cancelar</a>
                            <button type="submit" class="btn btn-primary ">Actualizar</button>
                        </div>
                    </div>

                </fieldset>
</form>

  </div>
</div>
@endsection