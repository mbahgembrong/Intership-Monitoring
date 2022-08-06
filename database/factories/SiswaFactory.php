<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Siswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
        'phone' => $this->faker->word,
        'alamat' => $this->faker->text,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'jenis_kelamin' => $this->faker->word,
        'foto' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
