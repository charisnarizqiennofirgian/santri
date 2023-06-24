<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table = 'santri';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'jk',
        'no_hp',
        'orangtua_idorangtua',
        'jenjang_idjenjang',
    ];
    public function orangtua()
    {
        return $this->belongsTo(Orangtua::class);
    }
    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }
}
