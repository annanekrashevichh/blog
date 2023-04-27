<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        //dd($user);
        $roles = User::getRoles();
        $user->role = $roles[$user->role];

        if($user->email_verified_at !== null) {
            $user->emailConfirmed = "Yes";
        } else {
            $user->emailConfirmed = "No";
        }

        return view('admin.user.show', compact('user'));
    }
}
