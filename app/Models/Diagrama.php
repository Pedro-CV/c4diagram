<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagrama extends Model
{
    use HasFactory;
    protected $table = 'diagramas';
    
    protected $fillable = ['nombre','descripcion', 'contenido', 'tipo', 'terminado', 'proyecto_id', 'user_id'];
    /* tipo => 1:contexto 2:contendedor 3:componentes 4:codigo */


}