<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'type',
        'naam',
        'email',
        'telefoon',
        'bedrijfsnaam',
        'data',
        'bestanden',
        'read_at',
    ];

    protected $casts = [
        'data' => 'array',
        'bestanden' => 'array',
        'read_at' => 'datetime',
    ];

    public function isRead(): bool
    {
        return $this->read_at !== null;
    }
}
