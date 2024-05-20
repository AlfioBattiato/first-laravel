<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'title' => fake()->words(rand(3, 10), true),
                'price' => rand(100, 350),
                'author' => fake()->name(),
                'img' => fake()->imageUrl(640, 480),
            ]);

        }

        // for ($i = 0; $i < 10; $i++) {
        //     Books::create([
        //         'title' => Str::random(2),
        //         'price' => Str::random(2),
        //         'description' => Str::random(2),
        //         'image' => Str::random(2)
        //     ]);
        // }


        // DB::table('Books')->insert([
        //     'titolo' => Str::random(2),
        //     'descrizione' => Str::random(2),
        //     'icona' => Str::random(2)
        // ]);
    }
}
