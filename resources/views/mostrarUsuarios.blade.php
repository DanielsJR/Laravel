
@extends('master')
@section('title','Mostrar Usuarios')
@section('content')

    <div class="title m-b-md">Mostrar Usuarios</div>
      <div>
   <ul>
        	@foreach ($usuarios as $usr)
        	<li>
        		{{ $usr->getName() }}
        	</li>
        	@endforeach

        </ul>
        </div>

@endsection







     