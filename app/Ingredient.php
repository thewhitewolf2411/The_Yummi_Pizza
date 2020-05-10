<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ingridient';

    protected $fillable = [
        'pizza_id','ingridient_name'
    ];
}
