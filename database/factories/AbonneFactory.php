<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Abonne;


class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Abonne::class;
    
    public function definition()
    {
        return [
            'name' => $this->faker->firstname(),
            'user_id' => User::pluck('id')->random()
        ];
    }
}
