<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Fonction qui va permettre de gerer la relation entre la table Users  et la table  Pivot_user_response
     */
    public function userPivot() {
        return $this->hasOne(Pivot_user_response::class, 'pivot_user_id');
    }

     /**
     * Fonction qui va permettre de gerer la relation entre la table  users  et la table Responses
     */
    public function userResp() {
        return $this->hasOne(Responses::class, 'user_id');
    }
}
