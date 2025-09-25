<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relación con noticias/artículos
    public function noticias()
    {
        return $this->hasMany(Noticia::class, 'user_id');
    }

    public function articulosSecundarios()
    {
        return $this->hasMany(ArticuloSecundario::class, 'user_id');
    }

    // Relación con suscripciones
    public function suscripciones()
    {
        return $this->hasMany(Suscripcion::class);
    }

    // Relación con contactos
    public function contactos()
    {
        return $this->hasMany(Contacto::class);
    }

    // Suscripción activa (si existe)
    public function suscripcionActiva()
    {
        return $this->suscripciones()
                    ->where('estado', 'activo')
                    ->where('fecha_fin', '>', now())
                    ->first();
    }
}
