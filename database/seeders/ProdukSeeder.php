<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $produks = [];
		$KategoriProduk = \DB::table('kategori_produks')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            $produks[] = [
                'nama' => $faker->word,
				'jumlah'=>$faker->numberBetween(1, 10),
				'category_id'=> $faker->randomElement($KategoriProduk),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert semua data sekaligus
        \DB::table('produks')->insert($produks);
    }
}