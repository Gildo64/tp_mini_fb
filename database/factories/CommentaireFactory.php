<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Commentaire;
use App\Models\Publication;


class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Commentaire::class;

    public function definition()
    {
        return [
            'user_id' => User::pluck('id')->random(),
            'publications_id'=>Publication::pluck('id')->random(),
            'contenu' => $this->faker->paragraph(),
        ];
    }
}
