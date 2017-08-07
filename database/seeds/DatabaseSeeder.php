<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	    //con el seeder 
         //$this->call(TerribleSeeder::class);

            //con el factory model
    	 factory(App\User::class, 10)->create();
    	 factory(App\Prueba::class, 10)->create();
    	 factory(App\Ticket::class, 10)->create();
    }
}
