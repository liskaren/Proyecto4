<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidence
 *
 * @property $id
 * @property $Discription
 * @property $productions_id
 * @property $operators_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Operator $operator
 * @property Production $production
 * @property Record[] $records
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Incidence extends Model
{
    
    static $rules = [
		'Discription' => 'required',
		'productions_id' => 'required',
		'operators_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Discription','productions_id','operators_id'];


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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'incidences_id', 'id');
    }
    

}
