<?php

namespace App\Models;


class PzPizza extends CoreModel
{
    protected $table = 'pz_pizza';

    protected $fillable = ['id', 'cheese_id', 'pizza_pad_id', 'user_id', 'name', 'calories', 'comment'];
}
