<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++){
            $cancellato = [true, false];

            $newTrain = new Train();

            $newTrain->Azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->streetname();
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = "213284";
            $newTrain->numero_carrozze = $faker->numberBetween(1,4);
            $newTrain->in_orario = array_rand($cancellato);
            $newTrain->cancellato = array_rand($cancellato);

            $newTrain->save();
        };

    }
}
