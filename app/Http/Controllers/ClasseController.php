<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
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
        $cycles = Cycle::all();
        return view('admin/classe.ajout', compact('cycles'));
    }

    public function index(){
        $classes = Classe::all();
        return view('admin/classe.liste',compact('classes'));
    }

    public function store(Request $request){
     

        $classes = new Classe();
        $classes->libelle_classe = $request->libelle_classe;
        $classes->tranche1 = $request->tranche1;
        $classes->tranche2 = $request->tranche2;
        $classes->tranche3 = $request->tranche3;
        $classes->scolarite = $request->tranche1 +  $request->tranche2 +  $request->tranche3;
        $classes->id_cycle = $request->id_cycle;
        $classes->save();
        //dd($classes);
       if ($classes) {
        toastr()->success('Classe enregistrée avec succése!', 'Félicitation');
        return redirect()->route('classes.liste');
       }

      
    }

    public function edit($id){
        $cycles = Cycle::all();
        $classes = Classe::find($id);
        return view('admin.classe.edit', compact('classes','cycles'));
    }
   

    

    public function update(Request $request, $id){
        $classes = Classe::where('id', $id)->first();
        $classes->libelle_classe = $request->libelle_classe;
        $classes->tranche1 = $request->tranche1;
        $classes->tranche2 = $request->tranche2;
        $classes->tranche3 = $request->tranche3;
        $classes->scolarite = $request->tranche1 +  $request->tranche2 +  $request->tranche3;
        $classes->id_cycle = $request->id_cycle;
       //dd($classes);
        $classes->save();

        if ($classes) {
            toastr()->success('Classe Modifiée avec succés!', 'Félicitation');
            return redirect()->route('classes.liste');
        }
    }

    public function delete($id){
        $classes = Classe::find($id);
        $classes->delete();
        if ($classes) {
            toastr()->success('Classe supprimée !!!', 'Félicitation');
            return redirect()->route('classes.liste');
        }
    }
}
