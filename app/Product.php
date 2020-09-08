<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'description',
        'photo',
        'yt_link',
    ];

    public function photos() {
      return $this->hasMany(PhotoProduct::class);
    }

}
