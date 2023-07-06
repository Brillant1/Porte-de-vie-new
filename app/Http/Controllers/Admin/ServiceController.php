<?php

namespace App\Http\Controllers\Admin;


use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('Admin.Services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Services.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Validator::make($request->all(),[
            'photo' => 'required|string',
            'description' => 'required|text',
            'intitule' => 'required|string'
        ]);

        $filename = Storage::disk('public')->put('services', $request->photo);

        $service_data = [
            'intitule' => $request->intitule,
            'description' => $request->description,
            'photo' => $filename,
        ];

        Service::create($service_data);
        return back()->with('success', 'Service ajouté avec succès');

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
    public function edit(Service $service)
    {
        if($service){
            return view('Admin.Services.edit', compact('service'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $photo = "";

        $service = Service::where('id',$id)->first();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($service->photo);
            $photo = Storage::disk('public')->put('services', $request->photo);
        }
        else{
            $photo = $service->photo;
        }

        $service->update([
            'intitule' => $request->intitule,
            'description' => $request->description,
            'photo' => $photo,
        ]);

        return back()->with('success', 'Service mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if($service){
            $service->delete();
            return back()->with('success', 'Service supprimé à jour avec succès');
        }
        return back()->with('error', 'Service introuvable');
    }
}
