<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoServicio extends Model
{
    use HasFactory;
    protected $table = 'tipo_reserva';

    public function listar(){ 

        $listaDeTipoServ = reserva::all();
        return $listaDeTipoServ;


    }
}
