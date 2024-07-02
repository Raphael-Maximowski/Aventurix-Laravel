<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Explorador;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     */
    public function definition(): array
    {
        return [
            'city'=>fake()->city(),
            'country'=>fake()->city(),
            'latitude'=>fake()->latitude(),
            'longitude'=>fake()->longitude(),
            'date'=>fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'explorador_id'=>null,
        ];
    }
}
