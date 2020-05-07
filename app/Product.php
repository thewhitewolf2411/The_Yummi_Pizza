<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    protected $fillable = [
        'product_name', 'small', 'medium', 'jumbo', 'price_small', 'price_medium', 'price_jumbo'
    ];
}
