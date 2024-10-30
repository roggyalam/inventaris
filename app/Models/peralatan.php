<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peralatan extends Model
{
    use HasFactory;
    protected $fillable = ['id','jenis_peralatan','nama_peralatan','kategori','spek','kode_spek'];
    public $timestamps = true;

    public function jenis_peralatan()
    {
        return $this->belongsTo(jenis_peralatan::class,'jenis_peralatan');
    }
     public function spek_komputer()
    {
        return $this->belongsTo(spek_komputer::class,'kode_spek');
    }
    
}
