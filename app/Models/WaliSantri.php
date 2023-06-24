<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliSantri extends Model
{
    use HasFactory;

    public $table = 'wali_santri';
    public $guarded = ['id'];

    public function santri()
    {
        return $this->belongsTo(IdentitasSantri::class, 'santri_id');
    }
}
