<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\UserList;
use App\Models\WishList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //En utilisant factory sur UserList et WishList je crée indirectement des categries, des items et des users avec relations.
        UserList::factory(2)->create();
        WishList::factory(2)->create();
    }
}
