<?php

namespace Database\Factories;

use App\Models\Detail_peran;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detail_peranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail_peran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_peran' => mt_rand(1,10),
            'id_pengurus' => mt_rand(1,50)
        ];
    }
}
