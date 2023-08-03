<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClassePrim;

class ClassePrimController extends Controller
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
       
        return view('adminprimaire.classe.ajout');
    }

    public function index(){
        $classes = ClassePrim::all();
        return view('adminprimaire/classe.liste',compact('classes'));
    }

    public function store(Request $request){
     

        $classes = new ClassePrim();
        $classes->libelle_classe = $request->libelle_classe;
        $classes->tranche1 = $request->tranche1;
        $classes->tranche2 = $request->tranche2;
        $classes->tranche3 = $request->tranche3;
        $classes->scolarite = $request->tranche1 +  $request->tranche2 +  $request->tranche3;
       
        $classes->save();
        //dd($classes);
       if ($classes) {
        toastr()->success('Classe enregistrée avec succése!', 'Félicitation');
        return redirect()->route('classes_prim.liste');
       }

      
    }

    public function edit($id){
       
        $classes = ClassePrim::find($id);
        return view('adminprimaire.classe.edit', compact('classes'));
    }
   

    

    public function update(Request $request, $id){
        $classes = ClassePrim::where('id', $id)->first();
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
            return redirect()->route('classes_prim.liste');
        }
    }

    public function delete($id){
        $classes = ClassePrim::find($id);
        $classes->delete();
        if ($classes) {
            toastr()->success('Classe supprimée !!!', 'Félicitation');
            return redirect()->route('classes_prim.liste');
        }
    }
}
