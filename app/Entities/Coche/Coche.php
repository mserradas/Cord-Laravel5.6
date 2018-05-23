<?php

namespace App\Entities\Coche;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Coche.
 *
 * @package namespace App\Entities\Coche;
 */
class Coche extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "coches";

    protected $fillable = [
    'marca_coche',
    'combustible',
    'modelo',
    'color',
    'tipo_cambio',
    'combustible_id',
    'kilometraje',
    'precio'
    ];

    public function marca_coche(){
        return $this->belongsTo('App\Entities\Coche\MarcaCoche');
    }

    public function combustible_coche(){
        return $this->belongsTo(CombustibleCoche::class);
    }

}
