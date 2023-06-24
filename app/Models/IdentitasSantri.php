<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasSantri extends Model
{
    use HasFactory;

    public $table = 'identitas_santri';
    public $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function wali()
    {
        return $this->hasOne(WaliSantri::class, 'santri_id', 'id');
    }
}
