<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
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
        return view('admin/matieres.ajout');
    }

    public function index(){
        $matieres = Matiere::all();
        return view('admin/matieres.liste',compact('matieres'));
    }

    public function store(Request $request){
     

        $matieres = new Matiere();
        $matieres->nom_matiere = $request->nom_matiere;
        $matieres->save();
       if ($matieres) {
        toastr()->success('Matiere enregistrée avec succése!', 'Félicitation');
        return redirect()->route('matieres.liste');
       }

      
    }

    public function edit($id){
        
        $matieres = Matiere::find($id);
        return view('admin.matieres.edit', compact('matieres'));
    }
   

    

    public function update(Request $request, $id){
        $matieres = Matiere::where('id', $id)->first();
        $matieres->nom_matiere = $request->nom_matiere;
       
        $matieres->save();

        if ($matieres) {
            toastr()->success('Matiere Modifiée avec succés!', 'Félicitation');
            return redirect()->route('matieres.liste');
        }
    }

    public function delete($id){
        $matieres = Matiere::find($id);
        $matieres->delete();
        if ($matieres) {
            toastr()->success('Matiere supprimée !!!', 'Félicitation');
            return redirect()->route('matieres.liste');
        }
    }
}
