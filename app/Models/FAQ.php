<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FAQ extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Category()
    {
       return $this->belongsTo(FaqCategory::class, 'faq_category_id');
    }
}
