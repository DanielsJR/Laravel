<?php

 
//model factory para llenar la tabla pruebas
$factory->define(App\Prueba::class, function (Faker\Generator $faker) {
    
    return [
        'campo1' => $faker->name,
        'campo2' => $faker->unique()->safeEmail,
        
    ];
});

