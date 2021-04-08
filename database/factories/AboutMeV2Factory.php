<?php

namespace Database\Factories;

use App\Models\AboutMeV2;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutMeV2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AboutMeV2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'description' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'activated' => $this->faker->randomDigitNotNull
        ];
    }
}
