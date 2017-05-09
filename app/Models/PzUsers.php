<?php

namespace App\Models;

class PzUsers extends CoreModel
{
    protected $table = 'pz_users';

    protected $fillable = ['id', 'name', 'email', 'password', 'phone', 'address', 'comment'];
}
