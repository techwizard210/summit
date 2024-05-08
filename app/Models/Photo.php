<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
    use HasFactory;

    protected $fillable = [
        'path',
        'user_id',
        'clue_id',
        'group_id'
    ];
}
