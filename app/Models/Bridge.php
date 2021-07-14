<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
    use HasFactory;
    public function words()
    {
        return $this->belongsToMany(Word::class);

    }
}

