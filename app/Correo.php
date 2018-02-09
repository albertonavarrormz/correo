<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Correo extends Authenticatable
{
    //
    use Notifiable;
    protected $table = 'correos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_tramite','accion','remitente','fecha_registro',
        'fecha_recibo','persona','prioridad','motivo','archivo1',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at','deleted_at'
    ];
}
