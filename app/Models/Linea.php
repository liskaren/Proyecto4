<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Linea
 *
 * @property $id
 * @property $Type_line
 * @property $Name
 * @property $number_line
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Linea extends Model
{
    
    static $rules = [
		'Type_line' => 'required',
		'Name' => 'required',
		'number_line' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Type_line','Name','number_line'];



}
