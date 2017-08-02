<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\User;


class PagesController extends Controller
{
   public function home(){
    	return view('home2');
    }

    public function contact(){
    	return view('contact');
    }

    public function about(){
    	return view('about');
    }



public function mostrarNombre(){

        $users = User::nombre()->get();
        dd($users);
            
       
    }
     
public function pruebaRutas(){
  //return '[crear tickets]';

  return ['tickets'=>'un ticket'];
}


public function rutaDinamica($id,$slug=null){

//return $id;
  dd($id,$slug);
}



}
