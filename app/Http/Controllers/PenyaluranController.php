<?php

namespace App\Http\Controllers;

use App\Models\Penyaluran;
use App\Http\Requests\StorePenyaluranRequest;
use App\Http\Requests\UpdatePenyaluranRequest;

class PenyaluranController extends Controller
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
     * @param  \App\Http\Requests\StorePenyaluranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenyaluranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function show(Penyaluran $penyaluran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyaluran $penyaluran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenyaluranRequest  $request
     * @param  \App\Models\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenyaluranRequest $request, Penyaluran $penyaluran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyaluran  $penyaluran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyaluran $penyaluran)
    {
        //
    }
}
