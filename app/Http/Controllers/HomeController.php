<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Message;
use App\Product;
use App\Role;
use App\User;
use Auth;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Session as Session;

class HomeController extends Controller
{

    public function dashboard(Request $request, User $user, Role $roles, Message $messages)
    {
    	$user = Auth::user();

        $user->usersCount = $user->all()->count();
        $user->rolesCount = $roles->all()->count();
        $user->contactsCount = $user->contacts()->count();
        $user->todosCount = $user->todos()->whereDone(0)->count();
        $user->messagesCount = $messages->whereViewed(0)->count();

    	return view('dashboard.index', compact('user'));
    }

    public function site(Request $request, Product $products)
    {   
           
        if ($request->segment(1) == 'es') {
            
             if (!$request->session()->get('lang')) {
                $request->session()->put('lang', 'es');
            }


        }

        $products = $products->latest('updated_at')->take(6)->forLang()->get();

		return view('home.home', compact('products'));
    	
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
        
        return redirect()->back();
    }
}
