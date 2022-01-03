<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Excludable;

class Ingredient extends Model
{
    use Excludable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'slug',
    //     'group',
    //     'cateogry',
    //     'subcateogry',
    //     'en_name',
    //     'bg_name',
    //     'nutrition_values',
    // ];

    // protected $hidden = ['created_at', 'updated_at'];

}
