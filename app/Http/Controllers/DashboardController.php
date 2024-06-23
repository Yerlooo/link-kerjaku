<?php

namespace App\Http\Controllers;

use App\Models\ApplicantLocation;
use App\Models\JobProvider;
use App\Models\JobType;
use App\Models\Location;
use App\Models\MoreInformation;
use App\Models\SelfDescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getShowRegisterDashboard()
    {
        return view('dashboard.daftar');
    }
    public function getShowDashboardHome()
    {
        $user = Auth::user();
        $users = User::where('email', $user->email)->get();
        return view('dashboard.home', compact('users'));
    }
    public function getShowLoginDashboard()
    {
        return view('dashboard.login');
    }
    public function getShowOverlay()
    {
        $selfDescriptions = SelfDescription::all();
        $applicantLocations = ApplicantLocation::all();
        $moreInformations = MoreInformation::all();
        return view('dashboard.overlay', compact('selfDescriptions', 'applicantLocations', 'moreInformations'));
    }
    public function getShowCreateLowongan()
    {
        $jobTypes = JobType::all();
    return view('dashboard.Page-BuatLowongan', compact('jobTypes'));
    }
    public function getShowCreateLowongan2()
    {
        return view('dashboard.Page-BuatLowongan2');
    }
    public function getShowCreateLowongan3()
    {
        return view('dashboard.Page-BuatLowongan3');
    }
    public function getShowLihatLowongan()
    {
        return view('dashboard.Page-LihatLowongan');
    }
    public function getShowPageLowonganKerja()
    {
        $jobProviders = JobProvider::all();
        $jobProviders = JobProvider::with('locations')->get();
        $locations = Location::all();
        $user = Auth::user();
        $users = User::where('email', $user->email)->get();
        return view('dashboard.Page-LowonganKerja', compact('jobProviders', 'locations', 'users'));
    }
    public function getShowProfill()
    {
        return view('dashboard.Page-Profill');
    }
    public function getShowStatus()
    {
        $selfDescriptions = SelfDescription::all();
        $applicantLocations = ApplicantLocation::all();
        $moreInformations = MoreInformation::all();
        $user = Auth::user();
        $users = User::where('email', $user->email)->get();
        return view('dashboard.Page-StatusPelamar', compact('selfDescriptions', 'applicantLocations', 'moreInformations', 'users'));
    }
    public function getShowEdit()
    {
        $jobProviders = JobProvider::all();
        return view('dashboard.Page-EditProfill', compact('jobProviders'));
    }
    public function getShowDokumen()
    {
        return view('dashboard.Page-DokumenPelamar');
    }
}
