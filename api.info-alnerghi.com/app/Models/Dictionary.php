<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "dictionary";
    
    protected $casts = [
        'value' => 'array',
        'tag' => 'array',
    ];

}

