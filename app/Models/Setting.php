<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = ['key', 'value'];

    public static function get($key)
    {
        return cache()->remember("setting_$key", 3600, function () use ($key) {
            return self::where('key', $key)->value('value');
        });
    }
}
