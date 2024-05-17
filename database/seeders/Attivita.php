<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Attivita extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          for ($i = 0; $i < 10; $i++) {
            DB::table('attivita')->insert([
                'titolo' => Str::random(2),
                'descrizione' => Str::random(2),
                'icona' => Str::random(2)
            ]);
        }


        // DB::table('attivita')->insert([
        //     'titolo' => Str::random(2),
        //     'descrizione' => Str::random(2),
        //     'icona' => Str::random(2)
        // ]);
    }
}
