<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Clue extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'point',
        'description',
        'image_path',
        'group_id',
    ];

    public function group() {
        return $this->belongsTo( Group::class );
    }
}
