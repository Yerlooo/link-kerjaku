<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobSeeker;

class JobSeekerController extends Controller
{
    public function index()
    {
        $jobSeekers = JobSeeker::all();
        return view('Lowongan.BuatLowongan', compact('jobSeekers'));
    }

    public function create()
    {
        return view('job-seekers.create');
    }

    public function store(Request $request)
    {
        $jobSeeker = new JobSeeker();
        $jobSeeker->name = $request->name;
        $jobSeeker->email = $request->email;
        $jobSeeker->skills = $request->skills;
        $jobSeeker->experience = $request->experience;
        $jobSeeker->resume = $request->resume;
        $jobSeeker->save();

        return redirect()->route('job-seekers.index');
    }

    public function show(JobSeeker $jobSeeker)
    {
        return view('job-seekers.show', compact('jobSeeker'));
    }

    public function edit(JobSeeker $jobSeeker)
    {
        return view('job-seekers.edit', compact('jobSeeker'));
    }

    public function update(Request $request, JobSeeker $jobSeeker)
    {
        $jobSeeker->name = $request->name;
        $jobSeeker->email = $request->email;
        $jobSeeker->skills = $request->skills;
        $jobSeeker->experience = $request->experience;
        $jobSeeker->resume = $request->resume;
        $jobSeeker->save();

        return redirect()->route('job-seekers.index');
    }

    public function destroy(JobSeeker $jobSeeker)
    {
        $jobSeeker->delete();
        return redirect()->route('job-seekers.index');
    }
}
