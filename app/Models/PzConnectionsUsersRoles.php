<?php

namespace App\Models;


class PzConnectionsUsersRoles extends CoreModel
{
    protected $table = 'pz_connections_users_roles';

    protected $fillable = ['user_id', 'role_id'];
}
