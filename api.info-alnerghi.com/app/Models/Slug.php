<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    use HasFactory;

    public $table = 'slugs';
    public $timestamps = false;

    protected $casts = [
        'slug' => 'array',
        'contents_id' => 'array',
        'evidences_id' => 'array',
        'menus_slug_id' => 'array',
        'parents_slug_id' => 'array',
        'redirect_slug' => 'array',
        'metatag' => 'array',
    ];
}
