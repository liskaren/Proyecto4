<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property $id
 * @property $Name
 * @property $Fecha
 * @property $operators_id
 * @property $productions_id
 * @property $incidences_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Incidence $incidence
 * @property Operator $operator
 * @property Production $production
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Record extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Fecha' => 'required',
		'operators_id' => 'required',
		'productions_id' => 'required',
		'incidences_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Fecha','operators_id','productions_id','incidences_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function incidence()
    {
        return $this->hasOne('App\Models\Incidence', 'id', 'incidences_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function operator()
    {
        return $this->hasOne('App\Models\Operator', 'id', 'operators_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function production()
    {
        return $this->hasOne('App\Models\Production', 'id', 'productions_id');
    }
    

}
