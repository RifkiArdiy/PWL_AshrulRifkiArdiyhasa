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
    protected $table = 'm_level';
    protected $primaryKey = 'level_id';

    use HasFactory;
}
