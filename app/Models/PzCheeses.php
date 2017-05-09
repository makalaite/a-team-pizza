<?php

namespace App\Models;

use App\models\CoreModel;


class PzCheeses extends CoreModel
{
    protected $table = 'pz_cheeses';

    protected $fillable = ['id', 'name', 'calories'];
}
