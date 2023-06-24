<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    use HasFactory;
    protected $table = 'jenjang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_jenjang',
    ];
    public function santri()
    {
        return $this->hasMany(Santri::class);
    }
}
