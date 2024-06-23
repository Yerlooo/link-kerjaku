<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function create($job)
    {
        // Ambil informasi pekerjaan berdasarkan ID atau data yang relevan
        $jobDetails = [
            'job_title' => 'Software Engineer',
            'company_name' => 'Tech Company',
            // Tambahkan detail lainnya sesuai kebutuhan
        ];

        return view('apply.create', compact('jobDetails'));
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data aplikasi pekerjaan
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Simpan data aplikasi pekerjaan
        // AplikasiPekerjaan::create($validated);

        return redirect()->route('apply.store')->with('success', 'Aplikasi berhasil dikirim!');
    }
}
