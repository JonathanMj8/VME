<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class File extends Model
{
    use HasFactory;
    protected $fillable = ['id','url','Titulo','Autor','Año','Carrera',
    ];
    protected $table='files';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carreras', 'id_carreras', 'Carrera');
    }
    

}
