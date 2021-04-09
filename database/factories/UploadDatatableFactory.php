<?php

namespace Database\Factories;

use App\Models\UploadDatatable;
use Illuminate\Database\Eloquent\Factories\Factory;

class UploadDatatableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UploadDatatable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'uri' => $this->faker->word,
        'type' => $this->faker->word,
        'belongs_to_table' => $this->faker->word,
        'belongs_to_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
