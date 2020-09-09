<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPengantar extends Model
{
    public static function boot()
    {
        parent::boot();
        self::saving(function ($your_model) {
            if(empty($your_model->status)) unset($your_model->attributes['status']);
        });
    }
}
