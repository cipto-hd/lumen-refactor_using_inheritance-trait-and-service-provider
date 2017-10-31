<?php

namespace App\Http\Controllers;

use App\Traits\UserTrait;

class UserController extends Controller
{
    use UserTrait;
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

}
