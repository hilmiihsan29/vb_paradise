<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villalocation extends Model
{
   // Jika Anda memiliki relasi one-to-many (contoh: satu lokasi memiliki banyak vila)
   public function villas()
   {
       return $this->hasMany(villa::class);
   }

   // Jika Anda memiliki relasi many-to-one (contoh: banyak vila berada di satu lokasi)
   public function location()
   {
       return $this->belongsTo(location::class);
   }
}
