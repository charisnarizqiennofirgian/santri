<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrtuSantri extends Model
{
    use HasFactory;

    public $table = 'ortu_santri';
    public $guarded = ['id'];

    public function santri()
    {
        return $this->belongsTo(IdentitasSantri::class, 'santri_id');
    }
}
