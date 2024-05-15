<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clue;

class Group extends Model {
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function clue() {
        return $this->hasMany( Clue::class );
    }
}
