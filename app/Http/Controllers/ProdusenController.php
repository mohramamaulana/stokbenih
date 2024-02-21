<?php

namespace App\Http\Controllers;

use App\Models\Produsen;
use App\Http\Requests\StoreProdusenRequest;
use App\Http\Requests\UpdateProdusenRequest;

class ProdusenController extends Controller
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
     * @param  \App\Http\Requests\StoreProdusenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdusenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function show(Produsen $produsen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function edit(Produsen $produsen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdusenRequest  $request
     * @param  \App\Models\Produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdusenRequest $request, Produsen $produsen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produsen  $produsen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produsen $produsen)
    {
        //
    }
}
