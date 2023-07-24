<?php

namespace App\Http\Controllers;

use App\Models\Apointment;
use Illuminate\Http\Request;

class ApointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.rendezVous');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.RendezVous.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
        $data= [
            "nom" => $request->nom,
            "email" => $request->email,
            "telephone" => $request->telephone,
            "objet" => $request->objet,
            "date" => $request->date,
            "heure" => $request->heure,
            "message" => $request->message,
        ];

        return response()->json([
            'success' => true
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Une erreur est survenue lors de la soumission du formulaire.'
        ], 500);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Apointment $apointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apointment $apointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apointment $apointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apointment $apointment)
    {
        //
    }
}
