<?php

namespace App\Http\Controllers;

use App\Models\Cad1Etudiant;
use Illuminate\Http\Request;

class Cad1EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Cad1Etudiant::all();
        return $etudiants;
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
    public function show(Cad1Etudiant $cad1Etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cad1Etudiant $cad1Etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cad1Etudiant $cad1Etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cad1Etudiant $cad1Etudiant)
    {
        //
    }
}
