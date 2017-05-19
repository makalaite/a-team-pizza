<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersRecoursesConnections extends Model
{
    protected $table = 'pz_users_recourses_connections';

    protected $fillable = ['user_id', 'recourse_id'];
}
