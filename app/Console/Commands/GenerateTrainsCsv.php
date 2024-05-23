<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as Faker;
use PhpParser\Node\Stmt\Return_;

class GenerateTrainsCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate-trains-csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a CSV file with train data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $faker = Faker::create();
        $fileName = 'trains.csv';
        $columns = [
            'id',
            'azienda', 
            'stazione_di_partenza', 
            'stazione_di_arrivo', 
            'orario_di_partenza', 
            'orario_di_arrivo',  
            'numero_carrozze', 
            'in_orario', 
            'cancellato', 
            'data'
        ];

        $file = fopen(storage_path($fileName), 'w');
        fputcsv($file, $columns);

        $starting_id = 51;

        for ($i = 0; $i < 50; $i++) {
            $row = [
                $starting_id + $i,
                $faker->company,
                $faker->city,
                $faker->city,
                $faker->time,
                $faker->time,
                $faker->numberBetween(7, 15),
                $faker->boolean,
                $faker->boolean,
                $faker->date
            ];
            
            fputcsv($file, $row);   
        }

        fclose($file);

        $this->info('CSV file generated successfully.');
        return 0;
    }
}

