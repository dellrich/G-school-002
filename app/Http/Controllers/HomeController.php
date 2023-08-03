<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Matiere;
use App\Models\Professeur;
use App\Models\Anneeacademique;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $teve = Eleve::all()->count();

        $tma = Matiere::all()->count();

        $tprof = Professeur::all()->count();

        $tclass = Classe ::all()->count();
        $anneescolaireencours = Anneeacademique::where('Statut_ac', 1)->first();
        //dd($anneescolaireencours);
        return view('home',compact('teve','tma','tprof','tclass','anneescolaireencours'));
    }
}
