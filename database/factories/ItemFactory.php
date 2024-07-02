<?php

// database/factories/ItemFactory.php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Explorador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition()
    {
        return [
            'explorador_id' => Explorador::factory(), // Cria um novo Explorador para cada Item
            'name' => $this->faker->word,
            'descricao' => $this->faker->text,
            'price' => $this->faker->numberBetween(0, 200),
        ];
    }
}

