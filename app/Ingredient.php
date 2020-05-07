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
        'ingridient_one', 'ingridient_two', 'ingridient_three', 'ingridient_four', 'ingridient_five', 'ingridient_six', 'ingridient_seven','ingridient_eight', 'ingridient_nine', 'ingridient_ten'
    ];
}
