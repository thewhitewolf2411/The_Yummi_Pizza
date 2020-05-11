<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'statistics';

    protected $fillable = [
        'user_id','pizza_id', 'pizza_price'
    ];
}
