<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // This will force the app to stop and show you exactly what the setting is
        dd(config('Security')->csrfProtection); 
        
        return view('welcome_message');
    }
}
