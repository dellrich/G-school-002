<?php

namespace App\Http\Controllers;

use App\Models\ElevePrim;
use App\Models\ClassePrim;
use App\Models\PaiementPrim;
use Illuminate\Http\Request;
use App\Models\Anneeacademique;
use App\Models\InscriptionPrim;

class ScolaritePrimController extends Controller
{

    public function index(){
        // $ins = Inscription::all();
        // $id_an = Anneeacademique::all();
        // $classes = Classe::all();


        return view('adminprimaire.scolarites.ajout');
        
    }

    public function searchs($eleve_id){
        $ele_id = ElevePrim::findOrFail($eleve_id);
        $classes = InscriptionPrim::where('id_eleve',$ele_id->id)->first();
        $classe = ClassePrim::where('id',$classes->code_classe)->first();
        // dd($classe);
        $mtant_verse = PaiementPrim::where('inscrire_id',$classes->id)->sum('mtant');
        $mtant_scol = $classe->scolarite;
        $mtant_due = $mtant_scol - $mtant_verse;

        $pmt = PaiementPrim::where('inscrire_id', $classes->id)->get();
        // dd($pmt);
        
        return view('adminprimaire.scolarites.payment', compact('ele_id','classes','classe','mtant_verse','mtant_due','pmt'));
    }

    public function paiemtStore(Request $request)
    {
      
        $mtant = $request->mtant;
        $ac = Anneeacademique::where('Statut_ac',1)->first();
        $ins_id = $request->insc_id;

        $id = InscriptionPrim::where('id',$ins_id)->first();
        $code_classe = ClassePrim::where('id',$id->code_classe)->first();
        
        $mtant_verse = PaiementPrim::where('inscrire_id',$ins_id)->sum('mtant');
        $mtant_scol = $code_classe->scolarite;
        $mtant_due = $mtant_scol - $mtant_verse;

        // dd($mtant_due);
        if ($mtant > $mtant_due || $mtant > $mtant_scol) {    
            toastr()->error('Le versement est supérieur au mtant du');
            return redirect()->route('search_prim.eleve',$id->id_eleve);
        }else {
            $paiemt = new PaiementPrim();
            $paiemt->mtant = $mtant;
            $paiemt->ac_id = $ac->id;
            $paiemt->inscrire_id = $ins_id;
            $paiemt->save();
            toastr()->success('Paiement éffectué avec succèes');
            return redirect()->route('search_prim.eleve',$id->id_eleve);
        }
            
    }

}
