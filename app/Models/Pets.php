<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;
    public $timestamps = false;
     
    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'sexo',
        'fechaNacimiento',
        'numeroAtenciones',
        'enTratamiento',      
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }
}
