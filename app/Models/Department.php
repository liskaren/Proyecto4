<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 *
 * @property $id
 * @property $Name
 * @property $orders_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Order $order
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Department extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'orders_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','orders_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne('App\Models\Order', 'id', 'orders_id');
    }
    

}
