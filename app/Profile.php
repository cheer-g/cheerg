<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/u85D5iqEzQ98JUtA6cbAAUkBQQnbD7qNVYAEWDyj.png';
        return '/storage/'. $imagePath;

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
