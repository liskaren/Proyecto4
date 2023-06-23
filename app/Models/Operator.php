<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Operator
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $job
 * @property $created_at
 * @property $updated_at
 *
 * @property Incidence[] $incidences
 * @property Record[] $records
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Operator extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'job' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','job'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidences()
    {
        return $this->hasMany('App\Models\Incidence', 'operators_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'operators_id', 'id');
    }
    

}
