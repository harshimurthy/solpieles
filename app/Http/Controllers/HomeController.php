<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class HomeController extends Controller
{
    public function dashboard(Request $reuest){
    	$user = User::find(auth()->user()->id);

    	// $user->birthdaysToday = $drivers->getBirthdaysTodayCount();
    	// $user->birthdaysThisMonth = $drivers->getBirthdaysThisMonthCount();
    	// $user->birthdaysNextMonth = $drivers->getBirthdaysNextMonthCount();
    	// $user->todosCount = $user->todosCount();
    	// $user->driversCount = $drivers->count();

    	return view('dashboard.index', compact('user'));
    }
}
