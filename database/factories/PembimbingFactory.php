<?php

namespace Database\Factories;

use App\Models\Pembimbing;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembimbingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pembimbing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'instansi_id' => $this->faker->word,
        'nama' => $this->faker->word,
        'alamat' => $this->faker->text,
        'phone' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
