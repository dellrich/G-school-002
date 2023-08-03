<?php

namespace App\Http\Controllers;

use App\Models\Anneeacademique;
use App\Models\Trimestre;
use Illuminate\Http\Request;

class AnneeacademiquePrimController extends Controller
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

    public function create()
    {
        return view('adminprimaire/anneeacademiques.ajout');
    }

    public function index()
    {
        $anneeacademiques = Anneeacademique::all();
        return view('adminprimaire/anneeacademiques.liste', compact('anneeacademiques'));
    }

    public function store(Request $request)
    {

        $annnee = $request->date_fin;
       // dd($annnee);
        $dejaanne = Anneeacademique::where('date_fin', $annnee)->first();
        if ($dejaanne == null) {


            $anneeacademiques = new Anneeacademique();
            $anneeacademiques->code_ac = $request->code_ac;
            $anneeacademiques->date_deb = $request->date_deb;
            $anneeacademiques->date_fin = $request->date_fin;
            $anneeacademiques->Statut_ac = 0;
            // dd($anneeacademiques);
            $anneeacademiques->save();
            if ($anneeacademiques) {
                $ann = Anneeacademique::orderBy('created_at', 'DESC')->first();
                $on = $ann->id;
                // dd($on);
                $trimestres = new Trimestre();
                $trimestres->code_trim = "1t";
                $trimestres->libel_trim = "PREMIER TRIMESTRE";

                $trimestres->id_annee = $on;
                $trimestres->save();


                $trimestres = new Trimestre();
                $trimestres->code_trim = "2t";
                $trimestres->libel_trim = "DEUXIEME TRIMESTRE";

                $trimestres->id_annee = $on;
                $trimestres->save();


                $trimestres = new Trimestre();
                $trimestres->code_trim = "3t";
                $trimestres->libel_trim = "TROIXIEME TRIMESTRE";

                $trimestres->id_annee = $on;
                $trimestres->save();



                toastr()->success('Année accadémique ajouté avec succése!', 'Félicitation');
                return redirect()->route('anneeacademiques_prim.liste');
            }
        } else{
            toastr()->error("L'année scolaire existe déja", 'Important');
            return back();
        }
    }

    public function edit($id)
    {

        $anneeacademiques = Anneeacademique::find($id);
        return view('adminprimaire.anneeacademiques.edit', compact('anneeacademiques'));
    }




    public function update(Request $request, $id)
    {
        $anneeacademiques = Anneeacademique::where('id', $id)->first();
        $code_ac = $request->code_ac;
        $date_deb = $request->date_deb;
        $date_fin = $request->date_fin;


        $anneeacademiques->code_ac = $code_ac;
        $anneeacademiques->date_deb = $date_deb;
        $anneeacademiques->date_fin = $date_fin;


        $anneeacademiques->save();

        if ($anneeacademiques) {
            toastr()->success('Année accadémique Modifiée avec succés!', 'Félicitation');
            return redirect()->route('anneeacademiques_prim.liste');
        }
    }

    public function delete($id)
    {
        $anneeacademiques = Anneeacademique::find($id);
        $anneeacademiques->delete();
    }

    public function active($id)
    {

        $anneeacademiques = Anneeacademique::all();
        foreach ($anneeacademiques as $anneeacademiques) {
            $anneeacademiques->Statut_ac = 0;
            $anneeacademiques->update();
        }


        $anneeacademiques = Anneeacademique::where('id', $id)->first();
        $anneeacademiques->Statut_ac = 1;
        $anneeacademiques->save();

        if ($anneeacademiques) {
            toastr()->success('Année accadémique Activée!', 'Félicitation');
            return redirect()->route('anneeacademiques_prim.liste');
        }

        // RETOUR SUR LA LISTE DES ANNONCES



    }
}
