<?php

namespace App\Models;



class PzConnectionsIngredientsPizza extends CoreModelModel
{
    protected $table = 'pz_connections_ingredients_pizza';

    protected $fillable = ['pizza_id', 'ingredient_id'];
}
