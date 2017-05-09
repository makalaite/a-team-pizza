<?php

namespace App\Models;


class PzConnectionsRolesPermissions extends CoreModelModel
{
    protected $table = 'pz_connections_roles_permissions';

    protected $fillable = ['role_id', 'permission_id'];
}
