<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\User;
use App\Models\WishList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WishList>
 */
class WishListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (WishList $wishlist) {
            $items = Item::inRandomOrder()->take(3)->get();
            $wishlist->items()->attach($items);
        });
    }
}
