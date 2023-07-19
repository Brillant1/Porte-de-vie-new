<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{

    public function create(){
        return view('front.contact');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'objet' => 'required|string',
            'phone' => 'required',
            'message' => 'required|string'
        ]);

        $detailMessage = [
            'nom' => $request->nom,
            'phone' => $request->phone,
            'email' => $request->email,
            'objet' => $request->objet,
            'message' => $request->message
        ];
        ContactMail::create($detailMessage);
        Mail::to($request->email)->send(new ContactFormMail($detailMessage));
        // return response()->json([
        //     'success' => true
        // ], 200);
        return back()->with('success', 'Message envoyé avec succès ! Restez à l\'écoute pour notre retour');

    }
}
