<?php

namespace App\Http\Controllers;

use App\Models\DataPondok;
use Illuminate\Http\Request;

class DataPondokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.data pondok.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPondok $dataPondok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataPondok $dataPondok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataPondok $dataPondok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataPondok $dataPondok)
    {
        //
    }
}
