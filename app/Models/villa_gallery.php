<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villa_gallery extends Model
{
    use HasFactory;

    public function villas()
    {
        return $this->belongsTo(villa::class);
    }
}

