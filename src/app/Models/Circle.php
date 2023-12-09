<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected $fillable = [
        'name',
        'description',
        'instagram_link', // Instagram リンク
        'twitter_link',   // Twitter リンク
        'line_link',      // LINE リンク
        'gender_ratio',
        'department_ratio',
        'photos',
    ];
}

