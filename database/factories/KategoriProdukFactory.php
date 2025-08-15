<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KategoriProduk;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class KategoriProdukFactory extends Factory
{
    protected $model = KategoriProduk::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kategori' => $this->faker->word,
			'jenis'=> $this->faker->word,
        ];
    }
}