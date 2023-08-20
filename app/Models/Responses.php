<?php

namespace App\Models;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responses extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_email',
        'question_number',
        'user_response',
    ];

     /**
     * Fonction qui va permettre de gerer la relation entre la table Responses et la table questions
     */
    public function respQuest() {
        return $this->hasOne(Questions::class, 'question_type');
    }
}
