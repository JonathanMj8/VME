<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $fillable = ['id','Autor','Titulo','Año','Categoria',
    ];
    protected $table='files';

    public function scopeNombre($query, $id){

        if($id){
            return $query->where('Categoria','=',"%$id%");
        }
    }
}
