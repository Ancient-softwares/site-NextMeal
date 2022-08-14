<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;

    protected $table = 'tbusuario';

    protected $fillable = [
        'idUsuario',
        'nomeUsuario',
        'cpfUsuario',
        'emailUsuario',
        'senhaUsuario',
        'celUsuario'
    ];
}
