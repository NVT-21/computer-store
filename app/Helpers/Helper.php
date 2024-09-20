<?php 
use App\Models\User;
use App\Models\Role;
function isAdmin(array $roles = []): bool {
    if (in_array(Role::ROLE_ADMIN, $roles)) {
        return true;
    }
    return false;
}
