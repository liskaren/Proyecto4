<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plant
 *
 * @property $id
 * @property $Name
 * @property $Description
 * @property $products_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plant extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Description' => 'required',
		'products_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Description','products_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'products_id');
    }
    

}
