<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUploadImgRequest;
use App\Http\Requests\UpdateUploadImgRequest;
use App\Models\UploadImg;

class UploadImgController extends Controller
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
     * @param  \App\Http\Requests\StoreUploadImgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUploadImgRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UploadImg  $uploadImg
     * @return \Illuminate\Http\Response
     */
    public function show(UploadImg $uploadImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadImg  $uploadImg
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadImg $uploadImg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUploadImgRequest  $request
     * @param  \App\Models\UploadImg  $uploadImg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUploadImgRequest $request, UploadImg $uploadImg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadImg  $uploadImg
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadImg $uploadImg)
    {
        //
    }
}
