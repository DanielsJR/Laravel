<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
        public function getName(){
        return $this->name;
    }

         public function getEmail(){
        return $this->email;
    }

}
