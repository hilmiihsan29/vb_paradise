<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villa extends Model
{

    use HasFactory;

    protected $table ="villas";
    protected $fillable = [
        'name', 'description', 'total_bedrooms', 'total_adults', 'total_kids',
        'total_infant', 'cover', 'price_rate', 'maps_url', 'terms_and_conditions',
    ];
    public function collections()
    {
        return $this->belongsToMany(collection::class, 'villa_collection');
    }
    public function locations()
    {
        return $this->belongsTo(location::class, 'villa_location');
    }
    public function villa_gallery()
    {
        return $this->hasMany(villa_gallery::class);
    }
}
