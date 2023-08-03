<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Inscription;
use Illuminate\Http\Request;
use App\Models\Anneeacademique;
use App\Models\Eleve;
use App\Models\Paiement;
use App\Models\Scolarite;
use GuzzleHttp\Promise\Create;

class ScolariteController extends Controller
{

    public function index(){
        // $ins = Inscription::all();
        // $id_an = Anneeacademique::all();
        // $classes = Classe::all();


        return view('admin.scolarites.ajout');
        
    }

    public function searchs($eleve_id){
        $ele_id = Eleve::findOrFail($eleve_id);
        $classes = Inscription::where('id_eleve',$ele_id->id)->first();
        $classe = Classe::where('id',$classes->code_classe)->first();
        // dd($classe);
        $mtant_verse = Paiement::where('inscrire_id',$classes->id)->sum('mtant');
        $mtant_scol = $classe->scolarite;
        $mtant_due = $mtant_scol - $mtant_verse;

        $pmt = Paiement::where('inscrire_id', $classes->id)->get();
        // dd($pmt);
        
        return view('admin.scolarites.payment', compact('ele_id','classes','classe','mtant_verse','mtant_due','pmt'));
    }

    public function paiemtStore(Request $request)
    {
        $mtant = $request->mtant;
        $ac = Anneeacademique::where('Statut_ac',1)->first();
        $ins_id = $request->insc_id;

        $id = Inscription::where('id',$ins_id)->first();
        $code_classe = Classe::where('id',$id->code_classe)->first();
        
        $mtant_verse = Paiement::where('inscrire_id',$ins_id)->sum('mtant');
        $mtant_scol = $code_classe->scolarite;
        $mtant_due = $mtant_scol - $mtant_verse;

        // dd($mtant_due);
        if ($mtant > $mtant_due || $mtant > $mtant_scol) {    
            // dd('je suis là');
            toastr()->error('Le versement est supérieur au montant due');
            return redirect()->route('search.eleve',$id->id_eleve);
        }else {
            // dd('je suis pas');
            $paiemt = new Paiement();
            $paiemt->mtant = $mtant;
            $paiemt->ac_id = $ac->id;
            $paiemt->inscrire_id = $ins_id;
            $paiemt->save();
            toastr()->success('Payement éffectué avec succèes');
            return redirect()->route('search.eleve',$id->id_eleve);
        }
            
    }

    // public function deleteProdColor($prod_color_id){
    //     $prodColor = ProductColor::findOrFail($prod_color_id);
    //     $prodColor->delete();

    //     return response()->json(['message'=>'La couleur du produit supprimé avec succèss']);
    // }

    

    // public function store(Request $request){


    //     $anneeacademiques = Anneeacademique::where('Statut_ac',1)->first();
    //     // Génération du numéro matricule
    //     $id = IdGenerator::generate([
    //         'table' => 'inscriptions',
    //         'length' => 15,
    //         'prefix' => 'MAT-',
    //         'field' => 'mat_eleve',
    //     ]);
    //     //Recuperation de l'id de l'année
    //     $id_an = Anneeacademique::where('Statut_ac',0)->first();
    //     // dd($id_an->id);

    //     //Recuperation des informations de l'éleve
    //     $id_eleve = $request->eleve;
    //     $el = Eleve::where('id',$id_eleve)->first();
    //     // dd($el);

    //     // Recuperation de l'id du cycle
    //     $id_classe = $request->classe;
    //     $cy = Classe::where('id',$id_classe)->first();
    //     // dd($cy->id_cycle);


    //     $inscripts = Inscription::where('id_eleve',$el->id)->first();

    //             // dd( $inscripts->id_annee);
    //              if ( $inscripts == null) {
    //                     $ins = new Inscription();
    //                     $ins->mat_eleve = $id;
    //                     $ins->prenom_eleve = $el->prenom_eleve;
    //                     $ins->nom_eleve = $el->nom_eleve;
    //                     $ins->id_eleve = $id_eleve;
    //                     $ins->id_annee = $id_an->id;
    //                     $ins->code_cycle = $cy->id_cycle;
    //                     $ins->code_classe = $id_classe;

    //                     $ins->save();

    //                     if ($ins) {
    //                     toastr()->success('Elève a été ajouté dans une classe');
    //                     return back();
    //                     }
    //              } elseif( $el->id == $inscripts->id_eleve || $anneeacademiques->id == $inscripts->id_annee) {
    //                 toastr()->error('Cet Elève à déja  été inscrire cette année','Important');
    //                 return back();
    //              }elseif ($el->id == $inscripts->id_eleve || $anneeacademiques->id != $inscripts->id_annee) {

    //                 $ins = Inscription::where('mat_eleve', $inscripts->mat_eleve)->first();
    //                 //dd( $ins);

    //                 $ins->id_annee = $id_an->id;
    //                 $ins->code_cycle = $cy->id_cycle;
    //                 $ins->code_classe = $id_classe;

    //                 $ins->save();

    //                 if ($ins) {
    //                 toastr()->success('Elève a été ajouté a une nouvelle classe');
    //                 return back();
    //                 }
    //              }



    //      // $eleve = Eleve::where('nom_eleve', $ins->nom_eleve)->first();
    //                              // $eleve->delete();

    // }

    // public function show(){
    //     $ins = Inscription::all();
    //     $id_an = Anneeacademique::all();
    //     return view('admin.scolarites.list', compact('ins','id_an'));
    // }

    // public function info($id){
    //     $info = Inscription::where('id_eleve',$id)->first();
    //     $infoall = Eleve::where('id',$id)->first();
    //    // dd($info);

    //     return view('admin.scolarites.info', compact('info','infoall'));
    // }


    // public function edit($id){
    //     $ins = Inscription::where('id_eleve',$id)->first();

    //     $classes = Classe::all();
    //     //$infoall = Eleve::where('id',$id)->first();
    //    // $ins = Inscription::find($id);
    //    // dd($ins);
    //     return view('admin.scolarites.edit', compact('ins','classes'));
    // }




    // public function update(Request $request, $id){
    //     $id_classe = $request->classe;
    //     $cy = Classe::where('id',$id_classe)->first();
    //    // dd( $cy->id_cycle);
    //     $ins = Inscription::where('mat_eleve', $id)->first();
    //   //dd( $cy->id_cycle);
    //     //$ins->mat_eleve = $id;
    //     //$ins->prenom_eleve = $el->prenom_eleve;
    //     //$ins->nom_eleve = $el->nom_eleve;
    //     //$ins->code_classe = $request->nom_matiere;
    //     // $ins->id_eleve = $id_eleve;
    //     // $ins->id_annee = $id_an->id;


    //       $ins->code_cycle = $cy->id_cycle;
    //       $ins->code_classe = $id_classe;
    //     $ins->save();
    //   // dd($ins);

    //     if ($ins) {
    //         toastr()->success("L'inscription Modifiée avec succés!", "Félicitation");
    //         return redirect()->route('scolarites.show');
    //     }
    // }
    // public function delete($id){
    //      $ins = Inscription::find($id);
    //     $ins->delete();
    //     if ($ins) {
    //         toastr()->success(" L'inscription supprimée !!! ", "Félicitation");
    //         return redirect()->route('scolarites.show');
    //     }
    // }

}
