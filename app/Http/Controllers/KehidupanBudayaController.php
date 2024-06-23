<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KehidupanBudaya;

class KehidupanBudayaController extends Controller
{
    public function getShowKB()
    {
        return view('KehidupanBudaya');
    }
}
