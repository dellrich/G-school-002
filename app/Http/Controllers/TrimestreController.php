<?php

namespace App\Http\Controllers;

use App\Models\Anneeacademique;
use App\Models\Trimestre;
use Illuminate\Http\Request;

class TrimestreController extends Controller
{
    public function index()
    {
        $anneescol = Anneeacademique::where('Statut_ac', 1)->first();
        $trimestres =Trimestre::where('id_annee', $anneescol->id)->take(3)->get();

        
       

        return view('admin.trimestres.liste', compact('trimestres','anneescol'));
    }

    public function edit($id)
    {

        $trimestres = Trimestre::find($id);
       
        $anneescol = Anneeacademique::where('Statut_ac', 1)->first();
        return view('admin.trimestres.edit', compact('trimestres', 'anneescol'));
    }
    public function update(Request $request, $id)
    {
        $trimestres = Trimestre::where('id', $id)->first();
        $trimestres->date_debut = $request->date_debut;
        $trimestres->date_fin = $request->date_fin;
        $trimestres->save();

        if ($trimestres) {
            toastr()->success('Trimestre Modifié avec succés!', 'Félicitation');
            return redirect()->route('trimestres.liste');
        }
    }

    public function delete($id)
    {
        $trimestres = Trimestre::find($id);
        $trimestres->delete();
        if ($trimestres) {
            toastr()->success('Coefficient supprimé !!!', 'Félicitation');
            return redirect()->route('trimestres.liste');
        }
    }
}
