<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
        $new_train = new Train();
        $new_train->azienda = $faker->company();
        $new_train->stazione_di_partenza = $faker->city();
        $new_train->stazione_di_arrivo = $faker->city();
        $new_train->orario_di_partenza = $faker->time();
        $new_train->orario_di_arrivo = $faker->time();
        $new_train->codice_treno = $faker->bothify('??-##-??');
        $new_train->numero_carrozze = $faker->numberBetween(0, 15);
        $new_train->in_orario = $faker->boolean();
        $new_train->cancellato = $faker->boolean();
        $new_train->data = $faker->date();
        $new_train->save();
    }
}
}
