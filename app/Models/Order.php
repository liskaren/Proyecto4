<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $number_line
 * @property $Order details
 * @property $Specifications
 * @property $products_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Department[] $departments
 * @property Production[] $productions
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		'number_line' => 'required',
		'Order details' => 'required',
		'Specifications' => 'required',
		'products_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['number_line','Order details','Specifications','products_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departments()
    {
        return $this->hasMany('App\Models\Department', 'orders_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productions()
    {
        return $this->hasMany('App\Models\Production', 'orders_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'products_id');
    }
    

}
