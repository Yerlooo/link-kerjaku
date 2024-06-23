<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function getShowDetailPekerjaan()
    {
        return view ('Pekerjaan.DetailPekerjaan');
    }
}
