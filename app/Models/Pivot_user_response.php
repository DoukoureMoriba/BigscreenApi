<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivot_user_response extends Model
{
    use HasFactory;
    protected $fillable = [
        'pivot_user_id',
        'url',
    ];

    /**
     * Fonction qui va permettre de gerer la relation entre la table Pivot_user_response et la table Users
     */
    public function pivotUser() {
        return $this->belongsTo(User::class, 'pivot_user_id');
    }
}
