<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::all();
        return view('Admin.Mediatheque.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Admin.Mediatheque.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $filename = "";
        if($request->hasfile('photo'))
        {


           foreach($request->file('photo') as $image)
           {

            if ($request->hasFile('photo')) {
                $filename = Storage::disk('public')->put('medias_images',$image);
            }

            $media = [
                'type' => $request->type_media,
                'url' => $filename
            ];

            Media::create($media);

           }

           return back()->with('addMediaMessage', 'Média(s) ajouté avec succès');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        return view('Admin.Mediatheque.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        $media->delete();
        return back()->with('success', 'Média supprimé');
    }

    public function mediatheque(){
        $photos = Media::where('type','photo')->get();
        $videos = Media::where('type','video')->get();

        return view('front.mediatheque', compact('photos', 'videos'));
    }
}
