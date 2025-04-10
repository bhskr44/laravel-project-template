<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dist_code',
        'subdiv_code',
        'cir_code',
        'username',
        'user_code',
        'user_desig_code',
        'status',
        'date_from',
        'date_to',
        'user_thumb_imp',
        'user_sign1',
        'user_sign2',
        'user_sign3',
        'phone_no',
        'usernm',
        'priority',
        'display_name',
        'aadhar_no',
        'user_type',
        'dlc_priority',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'user_thumb_imp',
        'user_sign1',
        'user_sign2',
        'user_sign3',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'date_from' => 'date',
            'date_to' => 'date',
            'status' => 'boolean',
        ];
    }
}
