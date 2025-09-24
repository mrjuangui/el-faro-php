<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloSecundario extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido', 'noticia_id'];

    public function noticia()
    {
        return $this->belongsTo(Noticia::class);
    }
}
