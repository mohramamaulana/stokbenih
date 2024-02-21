<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreStokRequest;
use App\Http\Requests\UpdateStokRequest;

class StokController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:stok-list|stok-create|stok-edit|stok-delete', ['only' => ['index','store']]);
         $this->middleware('permission:stok-create', ['only' => ['create','store']]);
         $this->middleware('permission:stok-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:stok-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table("stoks AS st")
        //         ->join("produsens AS pr" , "st.produsen_id" , "=" , "pr.id" )
        //         ->join("varietas AS vr" , "st.varietas_id" , "=" , "vr.id" )
        //         ->join("kelas_benihs AS kb" , "st.kelas_id" , "=" , "kb.id" )
        //         ->paginate(1);
        // return response()->json($stok);
        return view("admin.stok.index");
    }

    public function getStok() {

        $data = DB::table("stoks AS st")
        ->join("produsens AS pr" , "st.produsen_id" , "=" , "pr.id" )
        ->join("varietas AS vr" , "st.varietas_id" , "=" , "vr.id" )
        ->join("kelas_benihs AS kb" , "st.kelas_id" , "=" , "kb.id" )
        ->select("st.id" , "pr.kabupaten" , "pr.nama" , "st.jumlah")
        ->paginate(15);

        return response()->json($data);
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
     * @param  \App\Http\Requests\StoreStokRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStokRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function edit(Stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStokRequest  $request
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStokRequest $request, Stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stok  $stok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stok $stok)
    {
        //
    }
}
