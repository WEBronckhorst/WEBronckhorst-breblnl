<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReactieRequest;
use App\Http\Requests\UpdateReactieRequest;
use App\Models\Reactie;

class ReactieController extends Controller
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
     * @param  \App\Http\Requests\StoreReactieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReactieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function show(Reactie $reactie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function edit(Reactie $reactie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReactieRequest  $request
     * @param  \App\Models\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReactieRequest $request, Reactie $reactie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reactie $reactie)
    {
        //
    }
}
