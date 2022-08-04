<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Messages;


class MessagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Messages::class;

    public function definition()
    {
        return [
            'contenu'=>$this->faker->paragraph(),
            'sender_id' => User::pluck('id')->random(),
            'receiver_id'=>User::pluck('id')->random(),
        ];
    }
}
