<?php

namespace App\Models;


class PzIngredients extends CoreModel
{
    protected $table = 'pz_ingredients';

    protected $fillable = ['id', 'name', 'calories'];
}
