<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function showUserProfile()
    {
        $user = User::find(1);
return view('profile', ['user' => $user]);
    }

    public function showUser2Profile()
    {
        $user = User::find(2);
return view('profile2', ['user' => $user]);
    }

}
