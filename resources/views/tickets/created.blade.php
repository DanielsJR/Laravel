@extends('master')
@section('title','Ticket Creado')
@section('content')
<div class="container">
  <div class="content">
    <div class="title">Ticket Creado Gracias!!</div>

    Titulo: {{$ticket->title}} <br>
    Contenido: {{$ticket->content}}
              
  </div>
</div>
@endsection