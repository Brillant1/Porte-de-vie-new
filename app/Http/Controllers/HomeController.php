<?php

namespace App\Http\Controllers;

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
        $temoignages = Temoignage::all()->take(3);
        return view('front.accueil', compact('activites', 'services', 'temoignages'));
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
}
