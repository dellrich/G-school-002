<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;



class ProfesseurController extends Controller
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
        return view('admin/profs.ajout');
    }

    public function index(){
        $profs = Professeur::all();
        return view('admin/profs.liste',compact('profs'));
    }

    public function store(Request $request){
     

        $profs = new Professeur();
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
            $file->move('storage/app/public/professeur_photo', $filename);
        
            $profs->photo = $filename;
        }
       

       // dd($anneeacademiques);
        $profs->save();
       if ($profs) {
        toastr()->success('Professeur enregistré avec succése!', 'Félicitation');
        return redirect()->route('profs.liste');
       }

      
    }

    public function edit($id){
        
        $profs = Professeur::find($id);
        return view('admin.profs.edit', compact('profs'));
    }
   

    

    public function update(Request $request, $id){
        $profs = Professeur::where('id', $id)->first();
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
            $file->move('storage/app/public/professeur_photo', $filename);
        
            $profs->photo = $filename;
        }
       
        $profs->save();

        if ($profs) {
            toastr()->success('Professeur Modifié avec succés!', 'Félicitation');
            return redirect()->route('profs.liste');
        }
    }

    public function delete($id){
        $profs = Professeur::find($id);
        $profs->delete();
        if ($profs) {
            toastr()->success('Professeur supprimé !!!', 'Félicitation');
            return redirect()->route('profs.liste');
        }
    }
}
