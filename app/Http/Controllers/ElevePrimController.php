<?php

namespace App\Http\Controllers;

use App\Models\Sexe;
use App\Models\ElevePrim;
use Illuminate\Http\Request;

class ElevePrimController extends Controller
{
    public function index(){
        $eleves = ElevePrim::all();

        return view('adminprimaire.eleves.liste', compact('eleves'));
    }

    public function create(){
        $sexes = Sexe::all();
        return view('adminprimaire.eleves.ajout',compact('sexes'));
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

        $eleves = new ElevePrim();
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
        $eleves = ElevePrim::find($id);
        // dd($eleves);

        return view('adminprimaire.eleves.edit', compact('eleves','sexes'));
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

        $eleves = ElevePrim::where('id', $id)->first();
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
            return redirect()->route('eleve_prim.index');
        }
    }

    public function delete($id){
        $eleves = ElevePrim::find($id)->delete();

        if ($eleves) {
            toastr()->success('Elève supprimé avec succèes');
            return back();
        }
    }
}
