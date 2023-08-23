<?php

namespace App\Http\Controllers;

use Kkiapay\Kkiapay;
use App\Models\Annexe;
use App\Models\Service;
use App\Models\Activite;
use App\Models\Newsletter;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $activites = Activite::all()->take(3);
        $services = Service::all()->take(3);

        return view('front.accueil', compact('activites', 'services'));
    }

    public function about(){
        $temoignages = Temoignage::all()->take(3);
        return view('front.about', compact('temoignages'));
    }

    public function annexe_index(){
        $annexes = Annexe::all();
        return view('front.annexes', compact('annexes'));
    }

    public function save(Request $request){

        $message = $request->get('message');
        Newsletter::create(['email'=> $message]);
        return response()->json([
            'success' => true
        ], 200);
    }



    public function validate_paiement(Request $request){
        $transaction_id = $request->query('transaction_id');
        $kkiapay = new Kkiapay(
            "51a238face61d82775a074c24111dba9108523ec",
            "pk_95d79743ec2cd5a9957add72065c5b8f5760b5ccfb2ad2e6d6d257fb00e502c8",
            "sk_f1be36c8d5c16ac42be047792e4fa0e11d5bcf0b39e50773646cb1a4bf4c644c",
        );

        if ($kkiapay->verifyTransaction($transaction_id)->status == "SUCCESS") {
          return response()->json([
            'statut' => true,
            'message' => "Paiement réussi"
          ]);
        }
        return response()->json([
            'statut' => false,
            'message' => "Paiement échoué"
        ]);

    }
}
