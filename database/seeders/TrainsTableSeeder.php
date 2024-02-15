<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\Company;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i=0; $i<30; $i++){
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->data_di_partenza = $faker->dateTime();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->orario_di_partenza = $faker->time('H:i');
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_arrivo = $faker->time('H:i');
            $new_train->codice_treno = $faker->randomNumber(5, true);
            $new_train->numero_carrozze = $faker->randomNumber(2, false);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();

            $new_train->save();
       }
    }
}
