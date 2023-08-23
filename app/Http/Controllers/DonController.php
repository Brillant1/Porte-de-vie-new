<?php

namespace App\Http\Controllers;

use App\Models\Don;
use Kkiapay\Kkiapay;
use Illuminate\Http\Request;

class DonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dons = Don::all();
        return view('Admin.Dons.index', compact('dons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.don');
    }

    public function type_don(){
        return view('front.typeDon');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transactionId = $request->input('transactionId');
            $kkiapay = new Kkiapay(
                "51a238face61d82775a074c24111dba9108523ec",
                "pk_95d79743ec2cd5a9957add72065c5b8f5760b5ccfb2ad2e6d6d257fb00e502c8",
                "sk_f1be36c8d5c16ac42be047792e4fa0e11d5bcf0b39e50773646cb1a4bf4c644c",
            );

            if ($kkiapay->verifyTransaction($transactionId)->status == "SUCCESS") {
                $data = [
                    "nom" => $request->nom,
                    "prenom" => $request->prenom,
                    "email" => $request->email,
                    "telephone" => $request->telephone,
                    "price" => $request->price,
                    "message" => $request->message,
                    "type" => $request->type,
                    "transactionId" => $transactionId
                ];

                Don::create($data);

                return response()->json([
                    'success' => true,
                    'message' => "Don enrégistré avec succès"
                ], 200);
            }
            return response()->json([
                'success' => false,
                'message' => "Paiement échoué"
            ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
