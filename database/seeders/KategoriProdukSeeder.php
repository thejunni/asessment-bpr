<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $kategori_produks = [];
		$Jenis= ["Bebas", "Acak"];

        for ($i = 0; $i < 10; $i++) {
            $kategori_produks[] = [
                'nama_kategori' => $faker->word,
				'jenis'=> $faker->randomElement($Jenis),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert semua data sekaligus
        \DB::table('kategori_produks')->insert($kategori_produks);
    }
}