<?php

namespace Database\Factories;

use App\Models\Pkl;
use Illuminate\Database\Eloquent\Factories\Factory;

class PklFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pkl::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'siswa_id' => $this->faker->word,
        'staff_id' => $this->faker->word,
        'bidang_id' => $this->faker->word,
        'pembimbing_id' => $this->faker->word,
        'instansi_id' => $this->faker->word,
        'status' => $this->faker->word,
        'waktu_mulai' => $this->faker->word,
        'waktu_selesai' => $this->faker->word,
        'id_sertifikat' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'no_induk' => $this->faker->word,
        'semester' => $this->faker->word,
        'jurusan' => $this->faker->word,
        'file' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
