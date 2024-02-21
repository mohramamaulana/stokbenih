<?php

namespace App\Http\Controllers;

use App\Models\Varietas;
use App\Http\Requests\StoreVarietasRequest;
use App\Http\Requests\UpdateVarietasRequest;

class VarietasController extends Controller
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
     * @param  \App\Http\Requests\StoreVarietasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVarietasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Varietas  $varietas
     * @return \Illuminate\Http\Response
     */
    public function show(Varietas $varietas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Varietas  $varietas
     * @return \Illuminate\Http\Response
     */
    public function edit(Varietas $varietas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVarietasRequest  $request
     * @param  \App\Models\Varietas  $varietas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVarietasRequest $request, Varietas $varietas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Varietas  $varietas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Varietas $varietas)
    {
        //
    }
}
