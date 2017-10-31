<?php

namespace App\Traits;

use App\User;

 
trait UserTrait
{
    public function show($id)
    {
        return User::findOrFail($id);
    }
}
