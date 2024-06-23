<?php

namespace App\Http\Controllers;

use App\Models\ApplicantLocation;
use App\Models\MoreInformation;
use App\Models\SelfDescription;
use Illuminate\Http\Request;

class LamarPekerjaanController extends Controller
{
    public function postDescriptions(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'no_hp' => 'required|string',
            'deskripsi_diri' => 'required|string',
            'pengalaman' => 'required|string',
            'soft_skills' => 'required|string',
            'hard_skills' => 'required|string',
        ]);
        
        $selfDescriptions = new SelfDescription();
        $selfDescriptions->nama = $request->nama;
        $selfDescriptions->deskripsi_diri = $request->deskripsi_diri;
        $selfDescriptions->email = $request->email;
        $selfDescriptions->no_hp = $request->no_hp;
        $selfDescriptions->pengalaman = $request->pengalaman;
        $selfDescriptions->soft_skills = $request->soft_skills;
        $selfDescriptions->hard_skills = $request->hard_skills;
        $selfDescriptions->save();
        
        $request->session()->put('selfDescriptions', $selfDescriptions->toArray());
        return redirect('/LamarPekerjaan2')->with('success', 'Data Deskripsi berhasil disimpan!');
    }
    public function postLocations(Request $request)
    {
        $request -> validate([
            'kota' => 'required|string',
            'alamat_lengkap' => 'required|string',
            'pos_code' => 'required|string',
        ]);

        $applicantLocation = new ApplicantLocation();
        $applicantLocation->kota = $request->kota;
        $applicantLocation->alamat_lengkap = $request->alamat_lengkap;
        $applicantLocation->pos_code = $request->pos_code;
        $applicantLocation->save();

        $request->session()->put('applicantLocation', $applicantLocation->toArray());
        return redirect('/LamarPekerjaan3')->with('success', 'Data Lokasi Telah Disimpan!');
    }
    public function postMoreInfor(Request $request)
    {
        $request->validate([
            'gaji' => 'required|string',
            'img_sertifikat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_cv' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reason' => 'required|string',
        ]);
        
        if ($request->hasFile('img_sertifikat')) {
            $imgSertifikatPath = $request->file('img_sertifikat')->store('sertifikat_images', 'public');
        }

        if ($request->hasFile('img_cv')) {
            $imgCvPath = $request->file('img_cv')->store('cv_images', 'public');
        }

        // Simpan data ke database
        $moreInformation = new MoreInformation();
        $moreInformation->gaji = $request->gaji;
        $moreInformation->img_sertifikat = $imgSertifikatPath ?? null;
        $moreInformation->img_cv = $imgCvPath ?? null;
        $moreInformation->reason = $request->reason;
        $moreInformation->save();

        $request->session()->put('moreInformation', $moreInformation->toArray());
        // Redirect dengan pesan sukses
        return redirect('/resultLamar')->with('success', 'Lamaran pekerjaan berhasil diunggah!');
    }
    public function resultLamar()
    {
        $selfDescriptions = session()->get('selfDescriptions');
        $applicantLocation = session()->get('applicantLocation');
        $moreInformation = session()->get('moreInformation');

        if ($selfDescriptions && $applicantLocation && $moreInformation) {
            return view('Pekerjaan.resultLamar', compact('selfDescriptions', 'applicantLocation', 'moreInformation'));
        } else {
            return redirect()->back()->with('error', 'Data tidak lengkap');
        }
    } 
}
