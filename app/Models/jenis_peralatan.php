<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_peralatan extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_costumer'];
    public $timestamps = true;

    public function peralatan()
    {
        return $this->hasMany(Peralatan::class, 'jenis_peralatan');
    }
}
