<?php

namespace App\Http\Controllers;

use App\Models\ProfesseurPrim;
use Illuminate\Http\Request;

class ProfesseurPrimController extends Controller
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
        return view('adminprimaire/enseignant.ajout');
    }

    public function index(){
        $profs = ProfesseurPrim::all();
        return view('adminprimaire/enseignant.liste',compact('profs'));
    }

    public function store(Request $request){
     

        $profs = new ProfesseurPrim();
        $profs->nom_prof = $request->nom_prof;
        $profs->prenom_prof = $request->prenom_prof;
        $profs->datenais_prof = $request->datenais_prof;
        $profs->adresse = $request->adresse;
        $profs->sexe = $request->sexe;
        $profs->telephone = $request->telephone;
        $profs->salaire = $request->salaire;


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/app/public/enseignant_photo', $filename);
        
            $profs->photo = $filename;
        }
       

       // dd($anneeacademiques);
        $profs->save();
       if ($profs) {
        toastr()->success('Enseignant enregistré avec succése!', 'Félicitation');
        return redirect()->route('enseignant.liste');
       }

      
    }

    public function edit($id){
        
        $profs = ProfesseurPrim::find($id);
        return view('adminprimaire.enseignant.edit', compact('profs'));
    }
   

    

    public function update(Request $request, $id){
        $profs = ProfesseurPrim::where('id', $id)->first();
        $profs->nom_prof = $request->nom_prof;
        $profs->prenom_prof = $request->prenom_prof;
        $profs->datenais_prof = $request->datenais_prof;
        $profs->adresse = $request->adresse;
        $profs->sexe = $request->sexe;
        $profs->telephone = $request->telephone;
        $profs->salaire = $request->salaire;


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/app/public/enseignant_photo', $filename);
        
            $profs->photo = $filename;
        }
       
        $profs->save();

        if ($profs) {
            toastr()->success('Enseignant Modifié avec succés!', 'Félicitation');
            return redirect()->route('enseignant.liste');
        }
    }

    public function delete($id){
        $profs = ProfesseurPrim::find($id);
        $profs->delete();
        if ($profs) {
            toastr()->success('Enseignant supprimé !!!', 'Félicitation');
            return redirect()->route('enseignant.liste');
        }
    }
}
