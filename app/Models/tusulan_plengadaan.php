<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tusulan_plengadaan extends Model
{
    use HasFactory;
    protected $fillable = ['id','tanggal','kode_peralatan','qty','kode_spek'];
    public $timestamps = true;

    public function Spek_Komputer()
    {
        return $this->belongsTo(Spek_Komputer::class,'kode_spek');
    }
}
