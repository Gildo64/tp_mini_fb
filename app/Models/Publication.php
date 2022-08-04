<?php

namespace App\Models;

use App\Models\User;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentaires()
    {
        return $this->belongsToMany(Commentaire::class);
    }
}
