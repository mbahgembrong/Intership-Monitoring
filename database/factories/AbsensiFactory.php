<?php

namespace Database\Factories;

use App\Models\Absensi;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsensiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Absensi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pkl_id' => $this->faker->word,
        'absensi' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
