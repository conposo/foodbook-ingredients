<?php

namespace App\Http\Controllers;

use \App\Ingredient;
use App\Traits\ApiResponser;

class IngredientsController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $ingredients = Ingredient::all();
        return $this->successResponse($ingredients);
    }

    public function getIngredients($ids)
    {
        // $ingredients = Ingredient::exclude(['slug', 'category', 'subcategory', 'nutrition_values', 'en_name', 'recipe_id', 'created_at', 'updated_at'])->find(explode(',',$ids));
        $ingredients = Ingredient::find(explode(',',$ids))->pluck('bg_name', 'id');
        // dd($ingredients);
        return $this->successResponse($ingredients);
    }
}
