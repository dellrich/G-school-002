<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Sexe;
Use toastr;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index(){
        $eleves = Eleve::all();

        return view('admin.eleves.liste', compact('eleves'));
    }

    public function create(){
        $sexes = Sexe::all();
        return view('admin.eleves.ajout',compact('sexes'));
    }

    public function store(Request $request){
        $nom = $request->firstname;
        $prenom = $request->lastname;
        $date = $request->datenais;
        $lieu = $request->lieunais;
        $sex = $request->sexe;
        $adrese = $request->address;
        $nomparent = $request->parentName;
        $contactparent = $request->number;

        $eleves = new Eleve();
        $eleves->nom_eleve = $nom;
        $eleves->prenom_eleve = $prenom;
        $eleves->date_nais = $date;
        $eleves->lieu_naiss = $lieu;
        $eleves->id_sexe = $sex;
        $eleves->adresse = $adrese;
        $eleves->noms_parent = $nomparent;
        $eleves->contact_parent = $contactparent;

        // if ($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move('storage/app/public/eleves', $filename);
        
        //     $eleves->photo = $filename;
        // }else{
        //     $eleves->photo = $contactparent;
        // }
        // dd($eleves);
        $eleves->save();
        if ($eleves) {
            toastr()->success('Elève enrégistré avec succèes');
            return back();
        }
    }

    public function edit($id){
        $sexes = Sexe::all();
        $eleves = Eleve::find($id);
        // dd($eleves);

        return view('admin.eleves.edit', compact('eleves','sexes'));
    }

    public function update(Request $request, $id){
        $nom = $request->firstname;
        $prenom = $request->lastname;
        $date = $request->datenais;
        $lieu = $request->lieunais;
        $sex = $request->sexe;
        $adrese = $request->address;
        $nomparent = $request->parentName;
        $contactparent = $request->number;

        $eleves = Eleve::where('id', $id)->first();
        $eleves->nom_eleve = $nom;
        $eleves->prenom_eleve = $prenom;
        $eleves->date_nais = $date;
        $eleves->lieu_naiss = $lieu;
        $eleves->id_sexe = $sex;
        $eleves->adresse = $adrese;
        $eleves->noms_parent = $nomparent;
        $eleves->contact_parent = $contactparent;

         // if ($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move('storage/app/public/eleves', $filename);
        
        //     $eleves->photo = $filename;
        // }else{
        //     $eleves->photo = $contactparent;
        // }

        $eleves->save();

        if ($eleves) {
            toastr()->success('Elève modifié avec succèes');
            return redirect()->route('eleve.index');
        }
    }

    public function delete($id){
        $eleves = Eleve::find($id)->delete();

        if ($eleves) {
            toastr()->success('Elève supprimé avec succèes');
            return back();
        }
    }
}
