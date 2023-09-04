<?php

namespace App\Models;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responses extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'response_id',
        'user_response',
    ];

     /**
     * Fonction qui va permettre de gerer la relation entre la table Responses et la table questions
     */
    public function respQuest() {
        return $this->hasOne(Questions::class, 'response_id');
    }


    /**
     * Fonction qui va permettre de gerer la relation entre la table Responses et la table users
     */
     public function respUser() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
