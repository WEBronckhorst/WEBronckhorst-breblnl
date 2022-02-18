<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKlantRequest;
use App\Http\Requests\UpdateKlantRequest;
use App\Models\Klant;

class KlantController extends Controller
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
     * @param  \App\Http\Requests\StoreKlantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKlantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function show(Klant $klant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function edit(Klant $klant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKlantRequest  $request
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKlantRequest $request, Klant $klant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klant $klant)
    {
        //
    }
}
