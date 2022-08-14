<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MesaModel extends Model
{
    use HasFactory;

    protected $table = "tbMesa";

    protected $fillable = [
        "idMesa",
        "quantAcento",
        "statusMesa",
        "numMesa",
        "idRestaurante"
    ];
}
