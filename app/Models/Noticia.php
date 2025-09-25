<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    // Columnas que se pueden llenar masivamente
    protected $fillable = [
        'titulo',
        'contenido',
        'imagen',
        'user_id',
        'slug',        // Para URLs amigables
        'categoria',   // Deporte, Negocios, Otros
        'destacado'    // Booleano: 1 = destacado, 0 = normal
    ];

    // Relación con el autor de la noticia
    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con artículos secundarios
    public function articulosSecundarios()
    {
        return $this->hasMany(ArticuloSecundario::class, 'noticia_id');
    }

    // Permite usar 'slug' en las rutas en lugar de 'id'
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Accessor opcional para formatear la fecha de creación
    public function getFechaCreacionAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
}
