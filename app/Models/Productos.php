<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
     
    use HasFactory;
    public $timestamps=false;
    protected $fillable =[
        'id','Autor','Titulo','Año','Categoria',
    ]; 
    protected $table='Memorias';

    public function scopeNombre($query, $id){

        if($id){
            return $query->where('Titulo','=',"%$id%");
        }
    }
}
