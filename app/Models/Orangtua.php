<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    use HasFactory;
    protected $table = 'orangtua';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];
    public function santri()
    {
        return $this->hasMany(Santri::class);
    }
}
