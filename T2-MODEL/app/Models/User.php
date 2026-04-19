<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'npm';
    public $incrementing = false;

    protected $fillable = [
        'npm',
        'username',
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    // relasi
    public function loans()
    {
        return $this->hasMany(Loan::class, 'user_npm', 'npm');
    }
}