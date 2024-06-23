<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    public function getShowRegister() 
    {
        return view('register');
    }
}
