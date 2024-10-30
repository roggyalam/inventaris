<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tindakan extends Model
{
    use HasFactory;
    protected $fillable = ['id','deskripsi'];
    public $timestamps = true;

    public function tusulan_perbaikan()
    {
        return $this->hasMany(tusulan_perbaikan::class, 'kode_tindakan');
    }
}
