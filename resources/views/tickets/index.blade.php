@extends('master')
@section('title','Mostrar Tickets')
@section('content')

<div class="title m-b-md" >Tickets</div>

@if (session ('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif

@if($tickets->isEmpty())
<p>No hay Tickets</p>
@else
<table class="table">
    <thead>

        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td><a href="{!! action('TicketsController@show', $ticket->slug) !!}">{{ $ticket->title }}</a></td>
            <td><span class="badge">{{ $ticket->status ? 'Pendiente':'Respondido'}}</span></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif

@endsection

