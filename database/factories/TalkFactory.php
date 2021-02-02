<?php

namespace Database\Factories;

use App\Models\Talk;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class TalkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Talk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'speaker' => $this->faker->name,
            'date' => $this->faker->dateTimeBetween(now()->subYear(), now()),
            'tenant_id' => Tenant::factory(),
        ];
    }
}
