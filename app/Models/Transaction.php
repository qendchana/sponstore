<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';
    protected $fillable = [
        'sponsor_id',
        'user_id',
        'event_id',
        'status',
        'file_path',
        'negotiation',
        'created_at',
        'updated_at'
    ];

    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
