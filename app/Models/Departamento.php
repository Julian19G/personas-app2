<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = "tb_departamento";
    protected $primaryKey = "depa_codi";
    public $timestamps = false;
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_codi');
    }
}


