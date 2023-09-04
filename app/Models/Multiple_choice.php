<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiple_choice extends Model
{
    use HasFactory;
    protected $fillable = [
        'wording',
        'question_choice_id',
    ];

    /**
     * Fonction qui va permettre de gerer la relation entre la table Multiple_choice et la table Questions
     */
    public function choiceQuest() {
        return $this->belongsTo(Questions::class, 'question_choice_id');
    }
}
