<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'description', 'visible', 'photo', 'services', 'typologies'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }

    public function stars()
    {
        return $this->belongsToMany(Star::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}