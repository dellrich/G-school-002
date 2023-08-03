<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Coefficient;
use App\Models\Matiere;
use Illuminate\Http\Request;

class CoefficientController extends Controller
{
    public function create()
    {
        $classes = Classe::all();
        $matieres = Matiere::all();
        return view('admin.coefs.ajout', compact('matieres', 'classes'));
    }

    public function store(Request $request)
    {
        $matidd = $request->id_matiere;
        $clasidd = $request->id_classe;

        $coefexit = Coefficient::where('id_classe', $clasidd)->where('id_matiere', $matidd)->first();
        if ($coefexit) {
            //  toastr()->success('coefficient à déjà été enregistrer', 'Important');
            toastr()->warning('coefficient à déjà été enregistrer', 'Important');

            return back();
        } else {
            $coefs = new Coefficient();
            $coefs->id_matiere = $request->id_matiere;
            $coefs->id_classe = $request->id_classe;
            $coefs->coef = $request->coef;




            $coefs->save();
            if ($coefs) {
                toastr()->success('Coéfficients enregistré avec succése!', 'Félicitation');
                return redirect()->route('coefs.liste');
            }
        }
    }


    public function index()
    {
        $coefs = Coefficient::all();

        return view('admin/coefs.liste', compact('coefs'));
    }

    public function edit($id)
    {

        $coefs = Coefficient::find($id);
        $classes = Classe::all();
        $matieres = Matiere::all();
        return view('admin.coefs.edit', compact('coefs', 'classes', 'matieres'));
    }
    public function update(Request $request, $id)
    {
        $coefs = Coefficient::where('id', $id)->first();
        $coefs->id_matiere = $request->id_matiere;
        $coefs->id_classe = $request->id_classe;
        $coefs->coef = $request->coef;

        $coefs->save();

        if ($coefs) {
            toastr()->success('Coefficient Modifié avec succés!', 'Félicitation');
            return redirect()->route('coefs.liste');
        }
    }

    public function delete($id)
    {
        $coefs = Coefficient::find($id);
        $coefs->delete();
        if ($coefs) {
            toastr()->success('Coefficient supprimé !!!', 'Félicitation');
            return redirect()->route('coefs.liste');
        }
    }
}
