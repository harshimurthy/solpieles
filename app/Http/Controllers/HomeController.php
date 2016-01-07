<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\User;
use App\Message;
// use Symfony\Component\HttpFoundation\Session as Session;

class HomeController extends Controller
{
	
    public function dashboard(Request $request, User $user, Role $roles, Message $messages){
    	$user = auth()->user();

        $user->usersCount = $user->all()->count();
        $user->rolesCount = $roles->all()->count();
        $user->contactsCount = $user->contacts()->count();
        $user->todosCount = $user->todos()->whereDone(0)->count();
        $user->messagesCount = $messages->whereViewed(0)->count();

    	return view('dashboard.index', compact('user'));
    }

    public function site(Request $request)
    {   

        if ($request->is('es')) {

            $request->session()->put('lang', 'es');

        }

    	if ( $request->session()->get('lang') == 'es' ) {
    		return view('website.home-es');
    	} 

		return view('website.home');
    	
    }

    /**
     * Set the language for main page
     * @param Request $request form data
     */
    public function setLanguage(Request $request)
    {
    	$this->validate($request, [
    		'lang'=>'required'
    	]);

    	$request->session()->put('lang', $request->input('lang'));

    	return redirect()->route('site.route');
    }
}
