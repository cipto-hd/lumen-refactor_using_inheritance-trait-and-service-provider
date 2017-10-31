<?php

namespace App\Http\Controllers;

use App\User;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }
}
