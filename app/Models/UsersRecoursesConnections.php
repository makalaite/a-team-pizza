<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersRecoursesConnections extends CoreModel
{
    protected $table = 'pz_users_recourses_connections';

    protected $fillable = ['id', 'user_id', 'recourse_id'];
}
