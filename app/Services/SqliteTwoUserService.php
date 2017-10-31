<?php

namespace App\Services;

use App\User2;
use App\Services\Contracts\UserServiceInterface;
 
class SqliteTwoUserService implements UserServiceInterface
{
    public function show($id)
    {
        return User2::findOrFail($id);
    }
}
