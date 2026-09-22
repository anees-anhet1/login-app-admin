<?php

// Fix 1: Update Admin role to have all permissions
$adminRole = \App\Models\Role::where('name', 'Admin')->first();
if ($adminRole) {
    $adminRole->update([
        'can_dashboard' => true,
        'can_user' => true,
        'can_role' => true,
    ]);
    echo "Fixed Admin role (ID:{$adminRole->id}) - all permissions enabled" . PHP_EOL;
}

// Fix 2: Assign Test Admin user to the Admin role
$testAdmin = \App\Models\User::where('name', 'Test Admin')->first();
if ($testAdmin && $adminRole) {
    $testAdmin->update(['role_id' => $adminRole->id]);
    echo "Fixed Test Admin user - assigned to Admin role (ID:{$adminRole->id})" . PHP_EOL;
}

// Verify
echo PHP_EOL . "=== VERIFICATION ===" . PHP_EOL;
foreach(\App\Models\Role::all() as $r) {
    echo "Role: {$r->name} | Dashboard:{$r->can_dashboard} User:{$r->can_user} Role:{$r->can_role}" . PHP_EOL;
}
echo PHP_EOL;
foreach(\App\Models\User::with('role')->get() as $u) {
    $roleName = $u->role ? $u->role->name : 'NONE';
    echo "User: {$u->name} | Role: {$roleName}" . PHP_EOL;
}
