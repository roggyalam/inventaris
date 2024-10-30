<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_peralatan extends Model
{
    use HasFactory;
    protected $fillable = ['id','qr_code','barcode','kode_ruang','kode_status_kondisi'];
    public $timestamps = true;

    public function Peralatan()
    {
        return $this->belongsTo(Peralatan::class,'qr_code');
    }
    public function ruang_lab()
    {
        return $this->belongsTo(ruang_lab::class,'kode_ruang');
    }
    public function status_kondisi()
    {
        return $this->belongsTo(status_kondisi::class,'kode_status_kondisi');
    }
    public function tusulan_perbaikan()
    {
        return $this->hasMany(tusulan_perbaikan::class, 'kode_aset');
    }
}

