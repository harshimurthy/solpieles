<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\User;
use App\Message;

class HomeController extends Controller
{
    public function dashboard(Request $reuest, User $user, Role $roles, Message $messages){
    	$user = auth()->user();

        $user->usersCount = $user->all()->count();
        $user->rolesCount = $roles->all()->count();
        $user->todosCount = $user->todos()->whereDone(0)->count();
        $user->messagesCount = $messages->whereViewed(0)->count();

    	return view('dashboard.index', compact('user'));
    }
}
