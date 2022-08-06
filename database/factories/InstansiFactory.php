<?php

namespace Database\Factories;

use App\Models\Instansi;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstansiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instansi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
        'alamat' => $this->faker->text,
        'telp' => $this->faker->word,
        'pendidikan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
