<?php

namespace App\Http\Controllers\Admin;

use App\Models\Annexe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AnnexeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annexes = Annexe::all();
        return view('Admin.Annexes.index', compact('annexes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Annexes.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = "";
        $data = Validator::make($request->all(),[
            'photo' => 'required|string',
            'description' => 'required|text',
            'nom' => 'required',
        ]);

        
        if ($request->hasFile('photo')) {
            $filename = Storage::disk('public')->put('annexes', $request->file('photo'));
        }

        $annexe_data = [
            'nom' => $request->nom,
            'description' => $request->description,
            'photo' => $filename,
        ];

        Annexe::create($annexe_data);

        return back()->with('success', 'Annexe ajoutée avec succès');
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
        $annexe = Annexe::findOrFail($id);
        return view('Admin.Annexes.edit', compact('annexe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $photo = "";
        $annexe = Annexe::where('id',$id)->first();
        
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($annexe->photo);
            $photo = Storage::disk('public')->put('annexes', $request->photo);
        }
        else{
            $photo = $annexe->photo;
        }
       
        $data = $annexe->update([   
            'description' => $request->description,
            'photo' => $photo,
            'nom' => $request->nom
        ]);

        return back()->with('success', 'Annexe mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $annexe = Annexe::find($id);
        if($annexe){
            $annexe->delete();
            return back()->with('success', 'Annexe supprimée avec succès');
        }
        return back()->with('error', 'Annexe introuvable');
    }
}
