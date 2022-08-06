<?php

namespace Database\Factories;

use App\Models\Penilaian;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenilaianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penilaian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pkl_id' => $this->faker->word,
        'kerajinan' => $this->faker->randomDigitNotNull,
        'kejujuran' => $this->faker->randomDigitNotNull,
        'kedisiplinan' => $this->faker->randomDigitNotNull,
        'kerjasama' => $this->faker->randomDigitNotNull,
        'inisiatif' => $this->faker->randomDigitNotNull,
        'tanggung_jawab' => $this->faker->randomDigitNotNull,
        'etika' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
