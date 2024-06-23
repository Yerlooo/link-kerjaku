<?php

namespace App\Http\Controllers;

use App\Models\FilamentUser;
use App\Http\Requests\StoreFilamentUserRequest;
use App\Http\Requests\UpdateFilamentUserRequest;

class FilamentUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFilamentUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilamentUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FilamentUser  $filamentUser
     * @return \Illuminate\Http\Response
     */
    public function show(FilamentUser $filamentUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FilamentUser  $filamentUser
     * @return \Illuminate\Http\Response
     */
    public function edit(FilamentUser $filamentUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilamentUserRequest  $request
     * @param  \App\Models\FilamentUser  $filamentUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilamentUserRequest $request, FilamentUser $filamentUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FilamentUser  $filamentUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(FilamentUser $filamentUser)
    {
        //
    }
}
