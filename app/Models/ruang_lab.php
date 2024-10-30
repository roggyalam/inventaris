<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang_lab extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','lokasi'];
    public $timestamps = true;

    public function dt_peralatan()
    {
        return $this->hasMany(dt_peralatan::class, 'kode_ruang');
    }
}
