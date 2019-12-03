<?php

namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        return $user->username;
    }
}
