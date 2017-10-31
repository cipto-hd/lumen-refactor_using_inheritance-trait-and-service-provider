<?php

namespace App\Http\Controllers;

// use App\Traits\UserTrait;
// use App\Services\UserService;
use App\Services\Contracts\UserServiceInterface;

class UserController extends Controller
{
    // use UserTrait;
    
    protected $user_service;
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserServiceInterface $user_service)
    {
        $this->user_service = $user_service;
    }

    public function show($id)
    {
        return $this->user_service->show($id);
    }
}
