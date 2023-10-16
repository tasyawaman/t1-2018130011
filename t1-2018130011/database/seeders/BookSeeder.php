<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // Create 25 dummy books
        for ($i = 0; $i < 25; $i++) {
            $isbn = $faker->isbn13;
            $judul = $faker->sentence(6);
            $halaman = $faker->numberBetween(50, 500);
            $kategori = $faker->word;
            $penerbit = $faker->company;

            $created_at = $faker->dateTimeBetween('-3 months', 'now');

            DB::table('books')->insert([
                'isbn' => $isbn,
                'judul' => $judul,
                'halaman' => $halaman,
                'kategori' => $kategori,
                'penerbit' => $penerbit,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }
    }
}
