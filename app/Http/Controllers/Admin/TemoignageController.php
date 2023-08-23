<?php

namespace App\Http\Controllers\Admin;

use App\Models\Temoignage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temoignages = Temoignage::all();
        return view('Admin.Temoignages.index', compact('temoignages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Temoignages.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Validator::make($request->all(),[
            'nom' => 'required|string',
            'description' => 'required|text',
            'lien' => 'required|string'
        ]);

        $temoignage_data = [
            'lien' => $request->lien,
            'description' => $request->description,
            'nom' => $request->nom,
        ];
        Temoignage::create($temoignage_data);
        return back()->with('success', 'Témoignage ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $temoignage = Temoignage::where('id', $id)->first();
        if($temoignage){
            return view('Admin.Temoignages.edit', compact('temoignage'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Temoignage::where('id', $id)->update([
            'lien' => $request->lien,
            'description' => $request->description,
            'nom' => $request->nom,
        ]);

        return back()->with('success','Témoignage mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $temoignage = Temoignage::find($id);
        if($temoignage){
            $temoignage->delete();
            return back()->with('success', 'Témoignage supprimé avec succès');
        }
        return back()->with('error', 'Témoignage introuvable');
    }
}
