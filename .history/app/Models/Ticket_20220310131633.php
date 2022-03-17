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
        return $this->belongsTo(User::calss)
    }
}
