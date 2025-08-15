<?php

namespace Database\Factories;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class ProdukFactory extends Factory
{
    protected $model = Produk::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
			'jumlah' => $this->faker->numberBetween(1, 10),
			'category_id'=> KategoriProduk::factory(),
        ];
    }
}