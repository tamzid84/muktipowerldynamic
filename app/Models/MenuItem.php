<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    //
    protected $fillable = ['menu_id', 'title', 'url', 'order', 'is_active'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
