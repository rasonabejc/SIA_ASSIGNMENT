<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imgUrl' => fake()->randomElement(['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRouXCzkTHAV8g36jyNjGjSJMpMZm1La935NMxXxN5r30KLRvjkDZfyDbqAtQJds8vvlo&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYSRzOG9ECLGK6P7_pHmqsiu6MVD1M7G4h9GS5nDwd05g3N32liDnv4IcVnbGeGFbMDXg&usqp=CAU', 'https://static.vecteezy.com/system/resources/thumbnails/006/844/098/small_2x/autumn-landscape-and-snowy-mountain-peaks-fantastic-sunset-vie-photo.jpg' ]),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' =>fake()->numberBetween(5000,10000)
        ];
    }
}
