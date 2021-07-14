<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    /**
     * Get the user's most recent order.
     */
    public function bridge()
    {
        return $this->belongsTo(Bridge::class);
    }
}
