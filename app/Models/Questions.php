<?php

namespace App\Models;

use App\Models\Types;
use App\Models\Responses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'question_body',
        'question_type',
    ];
    /**
     * Fonction qui va permettre de gerer la relation entre la table questions et la table types
     */
    public function questType() {
        return $this->belongsTo(Types::class, 'question_type');
    }

     /**
     * Fonction qui va permettre de gerer la relation entre la table questions et la table Responses
     */
    public function questResp() {
        return $this->hasOne(Responses::class, 'question_number');
    }
}
