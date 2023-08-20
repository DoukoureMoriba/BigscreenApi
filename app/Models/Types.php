<?php

namespace App\Models;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Types extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_type',
    ];




    /**
     * Fonction qui va permettre de gerer la relation entre la table Types et la table questions
     */
    public function typeQuest() {
        return $this->hasMany(Questions::class, 'question_type');
    }
}
