<?php

namespace RawMaterialManager;

class AdminUser extends User
{
    // Overwrite eloquent's admin_user table name
    protected $table = 'users';

    // Set up user's guard
    protected $guard = 'admin';
}
