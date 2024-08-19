<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $fillable = [
        'nome', 'email', 'senha', 'tipo'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }
    public function isUsuario()
    {
        return $this->tipo === 'usuario';
    }
    public function isBibliotecario()
    {
        return $this->tipo === 'bibliotecario';
    }
}
