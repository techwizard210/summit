<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clue;

class Photo extends Model {
    use HasFactory;

    protected $fillable = [
        'path',
        'user_id',
        'clue_id',
        'group_id'
    ];

    public function clue() {
        return $this->belongsTo( Clue::class );
    }
}
