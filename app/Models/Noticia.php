<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido', 'imagen', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function articulosSecundarios()
    {
        return $this->hasMany(ArticuloSecundario::class);
    }
}
