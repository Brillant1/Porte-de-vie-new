<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activites = Activite::all();
        return view('Admin.Activites.index', compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Activites.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = "";
        $data = Validator::make($request->all(),[
            'start_date' => 'required|before_or_equal:end_date',
            'end_date' => 'required|after_or_equal:start_date',
            'photo' => 'required|string',
            'description' => 'required|text',
            'titre' => 'required',
            'zone' => 'required'
        ]);



        if ($request->hasFile('photo')) {
            $filename = Storage::disk('public')->put('activites', $request->file('photo'));
        }



        $activity_data = [
            'titre' => $request->titre,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'zone' => $request->zone,
            'photo' => $filename,
            'publish_at' => $request->publish_at
        ];

        Activite::create($activity_data);

        return back()->with('success', 'Activité ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activite = Activite::findOrFail($id);
        return view('Admin.Activites.edit', compact('activite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activite $activite)
    {
        $photo = "";
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($activite->photo);
            $photo = Storage::disk('public')->put('activites', $request->photo);
        }
        else{
            $photo = $activite->photo;
        }

        $activite->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'zone' => $request->zone,
            'photo' => $photo,
            'publishAt' => $request->publish_at
        ]);

        return back()->with('success', 'Activité mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $activite = Activite::find($id);
        if($activite){
            $activite->delete();
            return back()->with('success', 'Activité supprimée avec succès');
        }
        return back()->with('error', 'Activitée introuvable');
    }
}
