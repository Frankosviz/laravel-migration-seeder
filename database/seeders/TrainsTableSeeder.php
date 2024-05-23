<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use App\Functions\Helpers as Help;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //     public function run(Faker $faker)
//      {
//         for ($i = 0; $i < 50; $i++) {
//         $new_train = new Train();
//         $new_train->azienda = $faker->company();
//         $new_train->stazione_di_partenza = $faker->city();
//         $new_train->stazione_di_arrivo = $faker->city();
//         $new_train->orario_di_partenza = $faker->time();
//         $new_train->orario_di_arrivo = $faker->time();
//         $new_train->codice_treno = $faker->regexify('[0-9]{2}[A-Z]{2}[0-9]{2}');
//         $new_train->numero_carrozze = $faker->numberBetween(7, 15);
//         $new_train->in_orario = $faker->boolean();
//         $new_train->cancellato = $faker->boolean();
//         $new_train->data = $faker->date();
//         $new_train->save();
//     }
//  }

    public function run(Faker $faker)
    {
        $path = __DIR__ . '/trains.csv';
        $data = Help::getCsvData($path);
        foreach ($data as $index => $train) {
            if ($index !== 0) {
                $new_train = new Train();
                $new_train->azienda = $train[2];
                $new_train->stazione_di_partenza = $train[3];
                $new_train->stazione_di_arrivo = $train[4];
                $new_train->orario_di_partenza = $train[5];
                $new_train->orario_di_arrivo = $train[6];
                $new_train->codice_treno = $train[7];
                $new_train->numero_carrozze = $train[8];
                $new_train->in_orario = $train[9];
                $new_train->cancellato = $train[10];
                $new_train->data = $train[11];
                $new_train->save();
            }
        }

    }

}

