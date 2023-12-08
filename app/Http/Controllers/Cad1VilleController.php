<?php

namespace App\Http\Controllers;

use App\Models\Cad1Ville;
use Illuminate\Http\Request;

class Cad1VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes = Cad1Ville::all();
        return $villes;
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
    public function show(Cad1Ville $cad1Ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cad1Ville $cad1Ville)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cad1Ville $cad1Ville)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cad1Ville $cad1Ville)
    {
        //
    }
}
