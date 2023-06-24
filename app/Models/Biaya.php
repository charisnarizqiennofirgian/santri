<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;
    protected $table = 'biaya';
    protected $primarykey = 'id';
    protected $fillable = [
        'tgl_pembayaran', 'jml_pembayaran', 'bukti_pembayaran', 'status_pembayaran', 'pendaftaran_id'
    ];

    public function pendaftaran(){ 
        return $this->belongsTo(Pendaftaran::class);
    }
}