<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'order', 'content'];

    protected static function booted()
    {
        static::saved(function () {
            Cache::put('pages', static::orderBy('order')->get(['title', 'slug']));
        });
    }
}
