<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestauranteModel extends Model
{
    use HasFactory;

    protected $table = 'tbRestaurante';

    protected $fillable = [
        "idRestaurante",
        "nomeRestaurante",
        "cepRestaurante",
        "telRestaurante",
        "ruaRestaurante",
        "numRestaurante",
        "bairroRestaurante",
        "cidadeRestaurante",
        "senhaRestaurante"
    ];
}
