<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    const PAGINATION_COUNT = 10;

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Reacsies()
    {
        return $this->hasMany(Reactie::class, 'id', 'ticket_id');
    }
}