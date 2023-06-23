<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Production
 *
 * @property $id
 * @property $Number line
 * @property $Number of units
 * @property $Specifications
 * @property $orders_id
 * @property $products_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Incidence[] $incidences
 * @property Order $order
 * @property Product $product
 * @property Record[] $records
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Production extends Model
{
    
    static $rules = [
		'Number line' => 'required',
		'Number of units' => 'required',
		'Specifications' => 'required',
		'orders_id' => 'required',
		'products_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Number line','Number of units','Specifications','orders_id','products_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incidences()
    {
        return $this->hasMany('App\Models\Incidence', 'productions_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne('App\Models\Order', 'id', 'orders_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'products_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Models\Record', 'productions_id', 'id');
    }
    

}
