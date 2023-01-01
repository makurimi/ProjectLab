<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    public function cart()
    {
        return $this->hasMany(cart::class);
    }

    public function transaction()
    {
        return $this->hasMany(transaction::class);
    }
    protected $table = 'user_datas';
    protected $fillable = [
        'name',
        'role',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
