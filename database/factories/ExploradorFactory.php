<?php

// database/factories/ExploradorFactory.php

namespace Database\Factories;

use App\Models\Explorador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExploradorFactory extends Factory
{
    protected $model = Explorador::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(15, 30),
            'city'=> $this->faker->city(),
            'country'=>$this->faker->country(),
            'latitude'=>$this->faker->latitude(),
            'longitude'=>$this->faker->longitude(),
        ];
    }
}


