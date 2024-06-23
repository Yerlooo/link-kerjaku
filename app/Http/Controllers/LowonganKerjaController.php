<?php

namespace App\Http\Controllers;

use App\Models\JobProvider;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LowonganKerjaController extends Controller
{
    public function getShowBuatLowongan()
    {
        return view('Lowongan.BuatLowongan');
    }
    public function getShowBuatLowongann()
    {
        return view('Lowongan.BuatLowongan2');
    }
    public function getShowBuatLowongannn()
    {
        return view('Lowongan.BuatLowongan3');
    }
    public function getShowLowonganKerja()
    {
        $jobProviders = JobProvider::all();
        $jobProviders = JobProvider::with('locations')->get();
        $locations = Location::all();
        $user = Auth::user();
        $users = User::where('email', $user->email)->get();
        return view('Lowongan.lowongankerja', compact('jobProviders', 'locations', 'users'));
    }
    public function getShowDetailKerja()
    {
        return view('Pekerjaan.DetailPekerjaan');
    }
    public function getShowUnggahLowongan()
    {
        return view('Lowongan.unggahlowongan');
    }
    public function getShowLowonganKerjaa()
    {
        return view('Lowongan.lowongankerja2');
    }
    public function getShowLamarKerja()
    {
        $user = Auth::user();
        $users = User::where('email', $user->email)->get();
        return view('Pekerjaan.LamarPekerjaan', compact('users'));
    }
    public function getShowLamarKerjaa()
    {
        $user = Auth::user();
        $users = User::where('email', $user->email)->get();
        return view('Pekerjaan.LamarPekerjaan2', compact('users'));
    }
    public function getShowLamarKerjaaa()
    {
        $user = Auth::user();
        $users = User::where('email', $user->email)->get();
        return view('Pekerjaan.LamarPekerjaan3', compact('users'));
    }
    public function saveLowongan()
    {
        return view('Lowongan.LowonganDisimpan');
    }
    public function getShowPekerjaan()
    {
        return view('Pekerjaan.Pekerjaan');
    }
}
