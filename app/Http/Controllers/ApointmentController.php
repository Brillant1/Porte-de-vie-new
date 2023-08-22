<?php

namespace App\Http\Controllers;

use Kkiapay\Kkiapay;
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
        // try{

        if ($request->type == "prophetique") {
            $transactionId = $request->input('transactionId');
            $kkiapay = new Kkiapay(
                "51a238face61d82775a074c24111dba9108523ec",
                "pk_95d79743ec2cd5a9957add72065c5b8f5760b5ccfb2ad2e6d6d257fb00e502c8",
                "sk_f1be36c8d5c16ac42be047792e4fa0e11d5bcf0b39e50773646cb1a4bf4c644c",
            );

            if ($kkiapay->verifyTransaction($transactionId)->status == "SUCCESS") {
                $data = [
                    "nom" => $request->nom,
                    "email" => $request->email,
                    "telephone" => $request->telephone,
                    "objet" => $request->objet,
                    "date" => $request->date,
                    "heure" => $request->heure,
                    "message" => $request->message,
                    "type" => $request->type,
                    "transactionId" => $transactionId
                ];

                Apointment::create($data);

                return response()->json([
                    'success' => true,
                    'message' => "Rendez-vous enrégistré avec succès"
                ], 200);
            }
            return response()->json([
                'success' => false,
                'message' => "Paiement échoué"
            ]);
        }else{
            $data = [
                "nom" => $request->nom,
                "email" => $request->email,
                "telephone" => $request->telephone,
                "objet" => $request->objet,
                "date" => $request->date,
                "heure" => $request->heure,
                "message" => $request->message,
                "type" => $request->type,
            ];

            Apointment::create($data);

            return response()->json([
                'success' => true,
                'message' => "Rendez-vous enrégistré avec succès"
            ], 200);
        }





        // } catch (\Exception $e) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Une erreur est survenue lors de la soumission du formulaire.'
        //     ], 500);
        // }
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
