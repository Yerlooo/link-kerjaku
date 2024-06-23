<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobProvider;
use App\Models\InformasiLainnya;
use App\Models\Location;
use RealRashid\SweetAlert\Facades\Alert;

class JobProviderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string',
            'job_description' => 'required|string',
            'email' => 'required|email',
            'company_name' => 'required|string',
            'job_type' => 'required|string',
            'required_skills' => 'required|string',
            'berkas' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('berkas')) {
            $berkasPath = $request->file('berkas')->store('berkas_images', 'public');
        }
        
        $jobProvider = new JobProvider();
        $jobProvider->job_title = $request->job_title;
        $jobProvider->job_description = $request->job_description;
        $jobProvider->email = $request->email;
        $jobProvider->company_name = $request->company_name;
        $jobProvider->job_type = $request->job_type;
        $jobProvider->required_skills = $request->required_skills;
        $jobProvider->berkas = $berkasPath ?? null;
        $jobProvider->save();
        
        $request->session()->put('jobProvider', $jobProvider->toArray());
        return redirect('/Page-BuatLowongan2')->with('success', 'Data pekerjaan berhasil disimpan!');
    }
    public function storePage(Request $request)
    {
        $request->validate([
            'jenis_kelamin' => 'required',
            'pengalaman' => 'required|string',
            'jenjang_pendidikan' => 'required',
        ]);
        
        $informasilainnya = new InformasiLainnya();
        $informasilainnya->jenis_kelamin = $request->jenis_kelamin;
        $informasilainnya->pengalaman = $request->pengalaman;
        $informasilainnya->jenjang_pendidikan = $request->jenjang_pendidikan;
        $informasilainnya->save();
        
        $request->session()->put('informasilainnya', $informasilainnya->toArray()); 
        return redirect('/Page-BuatLowongan3')->with('success', 'Data pekerjaan berhasil disimpan!');

    }
    public function storePageThree(Request $request)
    {
        $request->validate([
            'negara' => 'required|string',
            'alamat' => 'required|string',
            'pos_code' => 'required|string',
        ]);
        
        $location = new Location();
        $location->negara = $request->negara;
        $location->alamat = $request->alamat;
        $location->pos_code = $request->pos_code;
        $location->save();
        
        $request->session()->put('location', $location->toArray());
        Alert::success('Sukses', 'Data berhasil diunggah!')->persistent(true);
        return redirect('/result')->with('success', 'Data pekerjaan berhasil disimpan!');
    }
    public function result()
    {
        $jobProvider = session()->get('jobProvider');
        $informasilainnya = session()->get('informasilainnya');
        $location = session()->get('location');

        if ($jobProvider && $informasilainnya && $location) {
            return view('result', compact('jobProvider', 'informasilainnya', 'location'));
        } else {
            return redirect()->back()->with('error', 'Data tidak lengkap');
        }
    }
    public function search(Request $request)
    {
        $jobTitle = $request->query('job_title');
        $companyName = $request->query('company_name');
        $jobType = $request->query('job_type');
        $requiredSkills = $request->query('required_skills');

        $query = JobProvider::query();
        if ($jobTitle) {
            $query->where('job_title', 'like', '%' . $jobTitle . '%')
                  ->orWhere('job_description', 'like', '%' . $jobTitle . '%');
        }
        if ($companyName) {
            $query->whereHas('company_name', function($q) use ($companyName) {
                $q->where('email', $companyName);
            });
        }
        if ($jobType) {
            $query->where('job_type', $jobType);
        }
        if ($requiredSkills) {
            $query->where('required_skills', $requiredSkills);
        }

        $jobs = $query->get();

        return response()->json($jobs);
    }
    public function show($id)
    {
        $jobProvider = JobProvider::findOrFail($id);
        return view('dashboard.Page-LowonganKerja', compact('lowonganKerja'));
    }
}
