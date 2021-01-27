<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'type', 'content'];

    public function getExcerptAttribute()
    {
        return Str::substr(strip_tags($this->content), 0, 100);
    }
}
