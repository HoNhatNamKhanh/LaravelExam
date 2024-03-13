<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\item;
use App\Models\category;
use Carbon\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'don_vi'=>$this->faker->name(),
            'so_luong' => $this->faker->randomNumber(),
            'gia_nhap' => $this->faker->randomNumber(),
            'gia_ban' => $this->faker->randomNumber(),
            'category_id' => Category::min('id')
        ];
    }
}
