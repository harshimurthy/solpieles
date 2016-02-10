<?php

namespace App;

use Illuminate\Support\Facades\Session;


class Lang
{
    public $lang = 'en'; // default app language

    function __construct($lang = null) 
    {
        if ($lang) {
            $this->lang = $lang;
        }

        if (!Session::has('lang')) {
            return Session::put('lang', $this->lang);
        };

       return $this->lang = Session::get('lang');

    }

    public function getLang()
    {
    	return $this->lang = Session::get('lang', 'en');
    }

    public function setLang($lang)
    {
    	Session::put('lang', $lang);
    	
    	return $this->lang = $lang;
    }


}
