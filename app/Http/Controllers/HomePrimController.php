<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anneeacademique;
use App\Models\ClassePrim;
use App\Models\ElevePrim;
use App\Models\MatierePrim;
use App\Models\ProfesseurPrim;

class HomePrimController extends Controller
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

        $teveprim = ElevePrim::all()->count();

        $tmaprim = MatierePrim::all()->count();

        $tprofprim = ProfesseurPrim::all()->count();

        $tclassprim = ClassePrim::all()->count();
        $anneescolaireencours = Anneeacademique::where('Statut_ac', 1)->first();
        //dd($anneescolaireencours);
        return view('homeprim',compact('teveprim','tmaprim','tprofprim','tclassprim','anneescolaireencours'));
    }
}
