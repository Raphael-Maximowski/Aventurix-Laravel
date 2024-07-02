<?php

// database/seeders/ExplorerSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Explorador;
use App\Models\Location;
use App\Models\User;
use App\Models\Item;

class ExplorerSeeder extends Seeder
{
    public function run()
    {
        Explorador::factory()
            ->count(50)
            ->has(User::factory()->count(1), 'user')
            ->has(Location::factory()->count(10), 'location')
            ->has(Item::factory()->count(20), 'item') 
            ->create();
    }
}


?>