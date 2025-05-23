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
        'profile_photo',
        'level_id',
        'created_at',
        'updated_at'
    ]; // Mendefinisikan kolom yang dapat diisi oleh model ini

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }
    
    public function hasRole($role): bool
    {
        return $this->level->level_kode == $role;
    }

    public function getRole(): string
    {
        return $this->level->level_kode;
    }
}
