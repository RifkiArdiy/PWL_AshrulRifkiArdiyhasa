<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(UserModel::class); 
    // }
    use HasFactory;
}
