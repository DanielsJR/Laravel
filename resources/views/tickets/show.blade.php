@extends('master')
@section('title','Mostrar Ticket')
@section('content')

 <div class="form-group">
    <label for="s1">Ticket</label>
<table class="table form-group">
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
</div>

      <div class="form-group">
             <div class="col-lg-offset-2">           
                       
            <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="btn btn-info">Editar</a>
        

        <form method="post" action="{!! action('TicketsController@destroy', $ticket->slug) !!}" class="pull-left">
                      {!! csrf_field() !!} 
              
            <button type="submit" class="btn btn-danger">Borrar</button>
           

        </form>
</div>

</div>


   @foreach ($comments as $comment)
    <div class="well well bs-component">
      <div class="content"> 
    {!! $comment->content !!}
      </div>
    </div>
    @endforeach 



    <form class="form-horizontal"  method="post" action = "/comment">
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>     
    @endforeach 

    @if (session('status'))
    <p class="alert alert-success">{{session('status')}}</p>     
    @endif
         <input type="hidden" name="post_id" value="{!! $ticket->id !!}">
        {!! csrf_field()!!} 

                <fieldset>
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Contestar</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                            <span class="help-block">Contesta este ticket sin groserias!</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset"  class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Publicar</button>
                        </div>
                    </div>
                </fieldset>
            </form>

      </div>

@endsection





