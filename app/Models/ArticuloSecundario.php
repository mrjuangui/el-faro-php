<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloSecundario extends Model
{
    use HasFactory;

    // Indicar el nombre real de la tabla
    protected $table = 'articulos_secundarios';

    protected $fillable = ['titulo', 'contenido', 'noticia_id'];

    public function noticia()
    {
        return $this->belongsTo(Noticia::class);
    }
}
