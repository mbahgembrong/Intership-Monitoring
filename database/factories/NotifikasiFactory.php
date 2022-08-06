<?php

namespace Database\Factories;

use App\Models\Notifikasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotifikasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notifikasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user' => $this->faker->word,
        'foreign_id' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'read' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
