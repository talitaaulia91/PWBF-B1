<?php

namespace Database\Factories;

use App\Models\Pengurus;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengurusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pengurus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pengurus' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['m', 'f']),
            'hp' => '+628'.mt_rand(1111111111,9999999999),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(8, 32),
            'aktif' => $this->faker->boolean()
        ];
    }
}
