<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }

    public function stars()
    {
        return $this->belongsToMany(Star::class);
    }
}
