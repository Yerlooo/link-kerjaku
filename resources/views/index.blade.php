<!-- resources/views/job-seekers/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Job Seekers</h1>
    <a href="{{ route('job-seekers.create') }}">Create New Job Seeker</a>
    <ul>
        @foreach($jobSeekers as $jobSeeker)
            <li>{{ $jobSeeker->name }} - <a href="{{ route('job-seekers.show', $jobSeeker->id) }}">View</a></li>
        @endforeach
    </ul>
@endsection
