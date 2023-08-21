<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collection extends Model
{
    use HasFactory;

    protected $fillable = ['collection_name'];

    public function villas()
    {
        return $this->belongsToMany(villa::class,);
    }
}
