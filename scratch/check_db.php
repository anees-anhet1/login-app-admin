<?php

echo "=== ROLES ===" . PHP_EOL;
foreach(\App\Models\Role::all() as $r) {
    echo "ID:{$r->id} Name:{$r->name} dash:{$r->can_dashboard} user:{$r->can_user} role:{$r->can_role}" . PHP_EOL;
}

echo PHP_EOL . "=== USERS ===" . PHP_EOL;
foreach(\App\Models\User::with('role')->get() as $u) {
    $roleName = $u->role ? $u->role->name : 'NULL';
    echo "ID:{$u->id} Name:{$u->name} role_id:{$u->role_id} role_name:{$roleName}" . PHP_EOL;
}
