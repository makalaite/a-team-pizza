<?php

namespace App\Models;


class PzPermissions extends CoreModel
{
    protected $table = 'pz_permissions';

    protected $fillable = ['id', 'name', 'comment'];
}
