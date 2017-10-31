<?php

namespace App\Services;

use App\User1;
use App\Services\Contracts\UserServiceInterface;
 
class SqliteOneUserService implements UserServiceInterface
{
    public function show($id)
    {
        return User1::findOrFail($id);
    }
}
