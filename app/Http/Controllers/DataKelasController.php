<?php

namespace App\Http\Controllers;

use App\Models\DataKelas;
use Illuminate\Http\Request;

class DataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.data kelas.index');
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
    public function show(DataKelas $dataKelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataKelas $dataKelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataKelas $dataKelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataKelas $dataKelas)
    {
        //
    }
}
