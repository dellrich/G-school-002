<?php

namespace App\Http\Controllers;

use App\Models\ElevePrim;
use App\Models\ClassePrim;
use Illuminate\Http\Request;
use App\Models\Anneeacademique;
use App\Models\InscriptionPrim;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class InscriptionPrimController extends Controller
{
    public function index()
    {
        $eleves = ElevePrim::all();
        $classes = ClassePrim::all();




        return view('adminprimaire.inscrire.ajout', compact('eleves', 'classes'));
    }

    public function store(Request $request)
    {


        $anneeacademiques = Anneeacademique::where('Statut_ac', 1)->first();
        // Génération du numéro matricule
        $id = IdGenerator::generate([
            'table' => 'inscription_prims',
            'length' => 15,
            'prefix' => 'MAT-',
            'field' => 'mat_eleve',
        ]);
       
        $id_eleve = $request->eleve;
        $el = ElevePrim::where('id', $id_eleve)->first();

        // dd($el);

        // Recuperation de l'id du cycle
        $id_classe = $request->classe;
      
        // dd($cy->id_cycle);



        $inscripts = InscriptionPrim::where('id_eleve', $el->id)->where('id_annee',$anneeacademiques->id)->first();
        $inscriptsexite = InscriptionPrim::where('id_eleve', $el->id)->first();
        //$inscripts = Inscription::where('id_eleve',$el->id)->orderBy('id_eleve','desc')->first();
        //dd( $inscripts);
        $ac_id = InscriptionPrim::where('id_annee',$anneeacademiques->id)->first();

       // dd($inscripts);




        if ($inscriptsexite == null) {
            $ins = new InscriptionPrim();
            $ins->mat_eleve = $id;
            $ins->prenom_eleve = $el->prenom_eleve;
            $ins->nom_eleve = $el->nom_eleve;
            $ins->id_eleve = $id_eleve;
            $ins->id_annee = $anneeacademiques->id;
           
            $ins->code_classe = $id_classe;

            $ins->save();

        
        

            if ($ins) {
                toastr()->success('Elève a été ajouté dans une classe');
                return back();
            }
        }elseif ($inscripts) {
            toastr()->error('Cet Elève à déja  été inscrire cette année', 'Important');
               return back();
        }else {



            $ins = new InscriptionPrim();
                $ins->mat_eleve = $inscriptsexite->mat_eleve;
                $ins->prenom_eleve = $el->prenom_eleve;
                $ins->nom_eleve = $el->nom_eleve;
                $ins->id_eleve = $id_eleve;
                $ins->id_annee = $anneeacademiques->id;
             
                $ins->code_classe = $id_classe;

                $ins->save();

             
                if ($ins) {
                    toastr()->success('Elève a été ajouté a une nouvelle classe');
                    return back();
                }

        }


    }

    public function show()
    {


        $id_an = Anneeacademique::where('Statut_ac', 1)->first();
        $ins = InscriptionPrim::where('id_annee', $id_an->id)->get();
        //dd( $ins);
        return view('adminprimaire.inscrire.list', compact('ins'));
    }

    public function info($id)
    {
        $info = InscriptionPrim::where('id_eleve', $id)->first();
        $infoall = ElevePrim::where('id', $id)->first();
        // dd($info);

        return view('adminprimaire.inscrire.info', compact('info', 'infoall'));
    }


    public function edit($id)
    {
        $ins = InscriptionPrim::where('id_eleve', $id)->first();

        $classes = ClassePrim::all();
        //$infoall = Eleve::where('id',$id)->first();
        // $ins = Inscription::find($id);
        // dd($ins);
        return view('adminprimaire.inscrire.edit', compact('ins', 'classes'));
    }




    public function update(Request $request, $id)
    {
        $id_classe = $request->classe;
       
        $ins = InscriptionPrim::where('id_eleve', $id)->first();
        //$ins->mat_eleve = $id;
        //$ins->prenom_eleve = $el->prenom_eleve;
        //$ins->nom_eleve = $el->nom_eleve;
        //$ins->code_classe = $request->nom_matiere;
        // $ins->id_eleve = $id_eleve;
        // $ins->id_annee = $id_an->id;


      
        $ins->code_classe = $id_classe;
        $ins->save();
        // dd($ins);

        if ($ins) {
            toastr()->success("L'inscription Modifiée avec succés!", "Félicitation");
            return redirect()->route('inscrire_prim.show');
        }
    }
    public function delete($id)
    {
        $ins = InscriptionPrim::find($id);
        $ins->delete();
        if ($ins) {
            toastr()->success(" L'inscription supprimée !!! ", "Félicitation");
            return redirect()->route('inscrire_prim.show');
        }
    }
}
