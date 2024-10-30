<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_kondisi extends Model
{
    use HasFactory;
    protected $fillable = ['id','kondisi'];
    public $timestamps = true;

    public function dt_peralatan()
    {
        return $this->hasMany(dt_peralatan::class, 'kode_status_kondisi');
    }
}
