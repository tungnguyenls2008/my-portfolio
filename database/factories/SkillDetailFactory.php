<?php

namespace Database\Factories;

use App\Models\SkillDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SkillDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'skill_id' => $this->faker->randomDigitNotNull,
        'detail' => $this->faker->word,
        'percent_achievement' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
