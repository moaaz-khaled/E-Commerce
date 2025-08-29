<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name' ,
        'Description' ,
        'CostPrice' ,
        'SellingPrice' ,
        'Stock',
    ];

    public function categories(){
        return $this->belongsToMany(Product::class , 'category_product');
    }

}
