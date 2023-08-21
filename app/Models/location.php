<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable = ['id','location_name'];

    public function villas()
    {
        return $this->belongsToMany(villa::class, 'villa_location', 'location_id', 'villa_id');
    }
}
