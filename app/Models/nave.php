<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nave extends Model
{
    use HasFactory;
    protected $table = "nave";
    public function listar(){ 

        $nave = nave::all();
        return $nave;


    }
}
