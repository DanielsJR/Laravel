<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ticket;
use Illuminate\Support\Facades\MaiL;
use App\Http\Requests\TicketFormRequest;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('/tickets.index',compact('tickets'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('/tickets.create');

    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketFormRequest $request)
    {
        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' =>$slug 
            )); 
        $ticket->save();

      //mail
        $data = array('ticket' => $slug);
        Mail::send('emails.ticket', $data, function($message){
          $message->from('d.rubio81@gmail.com','Curso Larabel');
          $message->to('d.rubio81@gmail.com')->subject('Hay un nuevo Ticket!!');
});

        return redirect('/create')->with('status' , 'Ticket creado!!. Su id es: '.$slug); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //$slug="59838c27675e1";
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $comments = $ticket->comments()->get();
        return view('/tickets.show',compact('ticket','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
         $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('/tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TicketFormRequest $request, $slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');
        $ticket->status = $request->get('status',1);
        $ticket->update();
        return redirect('/tickets')->with('status','El ticket '.$slug.' ha sido Actualizado!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();
        return redirect('/tickets')->with('status','El ticket '.$slug.' ha sido Destruido!!');
    }
}
