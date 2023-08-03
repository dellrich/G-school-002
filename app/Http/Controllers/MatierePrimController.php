<?php

namespace App\Http\Controllers;

use App\Models\MatierePrim;
use Illuminate\Http\Request;

class MatierePrimController extends Controller
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

    public function create(){
        return view('adminprimaire/matieres.ajout');
    }

    public function index(){
        $matieres = MatierePrim::all();
        return view('adminprimaire/matieres.liste',compact('matieres'));
    }

    public function store(Request $request){
     

        $matieres = new MatierePrim();
        $matieres->nom_matiere = $request->nom_matiere;
        $matieres->save();
       if ($matieres) {


        
        toastr()->success('Matiere enregistrée avec succése!', 'Félicitation');
        return redirect()->route('matieres_prim.liste');
       }

      
    }

    public function edit($id){
        
        $matieres = MatierePrim::find($id);
        return view('adminprimaire.matieres.edit', compact('matieres'));
    }
   

    

    public function update(Request $request, $id){
        $matieres = MatierePrim::where('id', $id)->first();
        $matieres->nom_matiere = $request->nom_matiere;
       
        $matieres->save();

        if ($matieres) {
            toastr()->success('Matiere Modifiée avec succés!', 'Félicitation');
            return redirect()->route('matieres_prim.liste');
        }
    }

    public function delete($id){
        $matieres = MatierePrim::find($id);
        $matieres->delete();
        if ($matieres) {
            toastr()->success('Matiere supprimée !!!', 'Félicitation');
            return redirect()->route('matieres_prim.liste');
        }
    }
}
