<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sponsor extends Authenticatable
{
    //
    protected $table = 'sponsors';
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'description',
        'image',
        'phoneNum',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
