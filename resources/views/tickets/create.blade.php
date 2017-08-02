@extends('master')
@section('title','Create Ticket')
@section('content')
<div class="container">
  <div class="content">
    <div class="title">Create Ticket</div>
      


<form class="form-horizontal"  method="post" >
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>     
    @endforeach 

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>     
    @endif

{!! csrf_field()!!} 

                <fieldset>
                    <legend>Enviar un nuevo ticket</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Título</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Título" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Contenido</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                            <span class="help-block">Envia un ticket para dudas y consultas.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary" onclick="" >Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>

  </div>
</div>
@endsection