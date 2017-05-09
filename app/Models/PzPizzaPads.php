<?php

namespace App\Models;

class PzPizzaPads extends CoreModel
{
    protected $table = 'pz_pizza_pads';

    protected $fillable = ['id', 'name', 'calories'];
}
