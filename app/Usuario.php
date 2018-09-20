<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'Usuario';
    protected $primaryKey="Id_Usuario";
    
    public $timestamps=true;

    protected $fillable =
    [
        'Direccion',
        'Nombre',
        'Apellido1',
        'Apellido2',
        'Telefono'
    ];
    public function genero() 
    {
        return $this->hasOne('App/Genero', 'Descripcion');
    }

    public function Rol() 
    {
        return $this->hasOne('App/Rol', 'Descripcion');
    }
}
