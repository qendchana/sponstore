<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Import Authenticatable
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'admins';

    protected $fillable = [
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];

    public function hasRole($role)
    {
        return $this->role === $role;
    }
}
