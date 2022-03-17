<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public static function getCount()
    {
        return ticket::query()
            ->selectRaw("count(*) as all_statuses")
            ->selectRaw("count(case when state = 1 then 1 end) as open")
            ->selectRaw("count(case when state = 2 then 1 end) as considering")
            ->selectRaw("count(case when state = 3 then 1 end) as in_progress")
            ->selectRaw("count(case when state = 4 then 1 end) as implemented")
            ->selectRaw("count(case when state = 5 then 1 end) as closed")
            ->first()
            ->toArray();
    }
}
