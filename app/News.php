<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    function city()
    {
        return $this->belongsTo(City::class)->get()->first();
    }
}
