<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Hash;

class PerusahaanController extends Controller
{
    public function getShowDetailPerusahaan()
    {
        return view('Perusahaan.DetailPerusahaan');
    }
    public function getshowLihatPerusahaan()
    {
        return view('Perusahaan.LihatPerusahaan');
    }
    public function getShowLihatPerusahaan2()
    {
        return view('Perusahaan.LihatPerusahaan2'); 
    }
    public function getShowProfillPerusahaan()
    {
        return view('Perusahaan.ProfillPerusahaan');
    }
    public function getShowHomePagePerusahaan()
    {
        return view('Perusahaan.HomePagePerusahaan');
    }
    public function getShowKontakPerusahaan()
    {
        return view('Perusahaan.Kontak-Perusahaan');
    }
}
