<?php

namespace App\Models;


class PzRoles extends CoreModel
{
    protected $table = 'pz_roles';

    protected $fillable = ['id', 'name', 'comment'];
}
