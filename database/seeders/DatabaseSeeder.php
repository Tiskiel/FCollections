<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use App\Models\UserList;
use App\Models\WishList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Création de 10 utilisateurs
        $users = User::factory()->count(10)->create();

        // Pour chaque utilisateur, création d'une user_list et d'une wish_list avec des items aléatoires
        foreach ($users as $user) {
            // Création de la user_list
            $userList = UserList::factory()->create(['user_id' => $user->id]);

            // Création de la wish_list
            $wishList = WishList::factory()->create(['user_id' => $user->id]);

            // Ajout de 5 items à la user_list
            $userList->item()->saveMany(Item::factory()->count(5)->create([
                'category_id' => Category::factory(),
            ]));

            // Ajout de 3 items à la wish_list
            $wishList->item()->saveMany(Item::factory()->count(3)->create([
                'category_id' => Category::factory(),
            ]));
        }
    }
}
