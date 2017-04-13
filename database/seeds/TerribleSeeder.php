<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


//ejemplo de seeder para llenar la tabla asuario
class TerribleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
for ($i=0; $i < 50; $i++) {
    \DB::table('users')->insert(array(
           'name' => $faker->name,
           'email'  => $faker->email,
           'password'  => $faker->password ,
           'remember_token' => $faker->randomElement(['true','false']),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    ));
}
    }
}

            