<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;



class treni extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i = 1; $i <= 15; $i++){
            $single_train = new Train();
            $single_train->Azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Frecciarossa', 'Intercity']);
            $single_train->Stazione_di_partenza = $faker->city();
            $single_train->Stazione_di_arrivo = $faker->city();
            $single_train->Orario_di_partenza = $faker->dateTimeThisYear();
            $single_train->Orario_di_arrivo = $faker->dateTimeThisYear();
            $single_train->Codice_Treno = $faker->randomNumber(7);
            $single_train->Numero_Carrozze = $faker->numberBetween(1, 15);
            $single_train->In_orario = $faker->boolean();
            $single_train->Cancellato = $faker->boolean();
            $single_train->save();
        }
    }
    
}


