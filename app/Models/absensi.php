<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kelas_id', 'keterangan_id', 'foto'];

    public function keterangan(){
        return $this->hasOne(Keterangan::class);
    }

    public function kelas(){
        return $this->hasOne(Kelas::class);
    }
}
