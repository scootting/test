<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "val.valores";
    
    protected $fillable = [
        'cod_val',          //codigo del valor
        'des_val',          //descripcion del valor
        'pre_uni',          //precio unitario en bolivianos
        'pre_uni_us',       //precio unitario en dolares
        'tip_mon',          //tipo de la moneda de emision B = Bolivianos D = Dolares
        'con_num',          //si tiene numero S = Si N = No
        'val_mon',          //si genera kardex S = Si N = No
        'tip_val',          //0 = Normal 1 = Emite 2 = Valor sin importe
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'imprimir',
    ];
}
