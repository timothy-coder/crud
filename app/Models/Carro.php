<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carro
 *
 * @property $id
 * @property $modelo
 * @property $categoria_id
 * @property $lugar_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carro extends Model
{
    
    static $rules = [
		'modelo' => 'required',
		'categoria_id' => 'required',
		'lugar_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modelo','categoria_id','lugar_id'];



}
