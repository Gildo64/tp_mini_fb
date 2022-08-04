<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Publication;


class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Publication::class;

    public function definition()
    {
        return [
            'contenu' => $this->faker->paragraph(),
            'user_id' => User::pluck('id')->random(),
        ];
    }
}
