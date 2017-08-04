@extends('master')
@section('title','Mostrar Ticket')
@section('content')

<div class="title m-b-md">Ticket</div>

  <div class="form-group">
    <label for="s1">Ticket</label>
    <select id= "s1" class="form-control select" placeholder="Seleccione un Ticket">
      <option selected></option>
      <option>Foobar</option>
      <option>Is great</option>
    </select>
</div> 


<table class="table">
    <thead>

        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Content</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
   
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->title }}</td>
            <td>{{ $ticket->content }}</td>
            <td><span class="badge">{{ $ticket->status ? 'Pendiente':'Respondido'}}</span></td>
        </tr>
   
    </tbody>
</table>


@endsection





