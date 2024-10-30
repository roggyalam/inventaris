<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spek_komputer extends Model
{
    use HasFactory;
    protected $fillable = ['id','processor','ram','hardisk','vga','sound','network1','network2'];
    public $timestamps = true;

    public function peralatan()
    {
        return $this->hasMany(Peralatan::class, 'kode_spek');
    }
    public function tusulan_plengadaan()
    {
        return $this->hasMany(tusulan_plengadaan::class, 'kode_spek');
    }
}
