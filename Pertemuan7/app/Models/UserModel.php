<?php

namespace App\Models;

use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable ;

class UserModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan oleh model ini

    protected $fillable = [
        'username',
        'password',
        'nama',
        'level_id',
        'created_at',
        'updated_at'
    ]; // Mendefinisikan kolom yang dapat diisi oleh model ini

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
