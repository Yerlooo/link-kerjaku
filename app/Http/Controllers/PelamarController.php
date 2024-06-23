<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function getShowProfillPelamar()
    {
        return view('Pelamar.ProfillPelamar');
    }
    public function getShowStatusPelamar()
    {
        return view('Pelamar.StatusPelamar');
    }
    public function getShowHomePagePelamar()
    {
        return view('Pelamar.HomePagePelamar');
    }
}
