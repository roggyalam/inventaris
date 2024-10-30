<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tusulan_perbaikan extends Model
{
    use HasFactory;
    protected $fillable = ['id','tanggal','kode_tindakan','kode_aset'];
    public $timestamps = true;

    public function Tindakan()
    {
        return $this->belongsTo(Tindakan::class,'kode_tindakan');
    }
    public function Dt_peralatan()
    {
        return $this->belongsTo(Dt_peralatan::class,'kode_aset');
    }
}
