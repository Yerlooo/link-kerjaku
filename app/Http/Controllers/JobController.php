<?php

namespace App\Http\Controllers;

use App\Models\InformasiLainnya;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobProvider;
use App\Models\Location;

class JobController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $jobProvider = $request->input('jobProvider');
        $informasilainnya = $request->input('informasilainnya');
        $location = $request->input('location');

        $query = JobProvider::query();
        $query = InformasiLainnya::query();
        $query = Location::query();

        if ($keyword) {
            $query->where('job_title', 'LIKE', "%{$keyword}%");
        }
        if ($jobProvider) {
            $query->where('job_title', 'LIKE', "%{$jobProvider}%");
        }
        if ($informasilainnya) {
            $query->where('jenjang_pendidikan', $informasilainnya);
        }
        if ($location) {
            $query->where('alamat', $location);
        }

        $jobs = $query->get();
    
    return response()->json($jobs);
    }
    public function destroy($id)
    {
        JobProvider::findOrFail($id)->locations()->delete();
        JobProvider::destroy($id);
        
        session()->flash('success', 'Data berhasil dihapus.');
        return response()->json(['success' => true]);
    }
    public function edit($id)
    {
        $jobProvider = JobProvider::find($id);
        return view('dashboard.Page-EditProfill', compact('jobProvider'));
    }

    public function update(Request $request, $id)
    {
        $jobProvider = JobProvider::find($id);
        $jobProvider->job_title = $request->job_title;
        $jobProvider->job_description = $request->job_description;
        $jobProvider->required_skills = $request->required_skills;
        $jobProvider->save();

        return redirect()->route('dashboard.ShowSuccess', $id)->with('success', 'Pekerjaan berhasil diperbarui.');
    }
}
