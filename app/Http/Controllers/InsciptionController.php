<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Cycle;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Inscription;
use toastr;
use Illuminate\Http\Request;
use App\Models\Anneeacademique;
use App\Models\Coefficient;
use App\Models\Matiere;
use App\Models\Note;
use App\Models\Trimestre;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class InsciptionController extends Controller
{
    public function index()
    {
        $eleves = Eleve::all();
        $classes = Classe::all();




        return view('admin.inscrire.ajout', compact('eleves', 'classes'));
    }

    public function store(Request $request)
    {


        $anneeacademiques = Anneeacademique::where('Statut_ac', 1)->first();
        // Génération du numéro matricule
        $id = IdGenerator::generate([
            'table' => 'inscriptions',
            'length' => 15,
            'prefix' => 'MAT-',
            'field' => 'mat_eleve',
        ]);
        //Recuperation de l'id de l'année
        //$id_an = Anneeacademique::where('Statut_ac',1)->first();
        // dd($id_an->id);

        //Recuperation des informations de l'éleve
        $id_eleve = $request->eleve;
        $el = Eleve::where('id', $id_eleve)->first();

        // dd($el);

        // Recuperation de l'id du cycle
        $id_classe = $request->classe;
        $cy = Classe::where('id', $id_classe)->first();
        // dd($cy->id_cycle);



        $inscripts = Inscription::where('id_eleve', $el->id)->where('id_annee',$anneeacademiques->id)->first();
        $inscriptsexite = Inscription::where('id_eleve', $el->id)->first();
        //$inscripts = Inscription::where('id_eleve',$el->id)->orderBy('id_eleve','desc')->first();
        //dd( $inscripts);
        $ac_id = Inscription::where('id_annee',$anneeacademiques->id)->first();

       // dd($inscripts);




        if ($inscriptsexite == null) {
            $ins = new Inscription();
            $ins->mat_eleve = $id;
            $ins->prenom_eleve = $el->prenom_eleve;
            $ins->nom_eleve = $el->nom_eleve;
            $ins->id_eleve = $id_eleve;
            $ins->id_annee = $anneeacademiques->id;
            $ins->code_cycle = $cy->id_cycle;
            $ins->code_classe = $id_classe;

            $ins->save();

            $trimestres = Trimestre::where('id_annee', $anneeacademiques->id)->take(3)->get();
            // dd($trimestres);

            foreach ($trimestres as $key => $trimestre) {
                $mat = Coefficient::where('id_classe', $id_classe)->get();
                foreach ($mat as $key => $matier) {
                    $notes = new Note();
                    $notes->matricule_eleve = $id;
                    $notes->prenom_eleve = $el->prenom_eleve;
                    $notes->nom_eleve = $el->nom_eleve;
                    $notes->code_ac = $anneeacademiques->code_ac;
                    $notes->code_cycle = $cy->id_cycle;
                    $notes->code_trimestre = $trimestre->id;
                    $notes->code_classe = $id_classe;
                    $notes->matiere = $matier->id;

                    $notes->save();
                }
            }

            if ($ins) {
                toastr()->success('Elève a été ajouté dans une classe');
                return back();
            }
        }elseif ($inscripts) {
            toastr()->error('Cet Elève à déja  été inscrire cette année', 'Important');
               return back();
        }else {



            $ins = new Inscription();
                $ins->mat_eleve = $inscriptsexite->mat_eleve;
                $ins->prenom_eleve = $el->prenom_eleve;
                $ins->nom_eleve = $el->nom_eleve;
                $ins->id_eleve = $id_eleve;
                $ins->id_annee = $anneeacademiques->id;
                $ins->code_cycle = $cy->id_cycle;
                $ins->code_classe = $id_classe;

                $ins->save();

                $trimestres = Trimestre::where('id_annee', $anneeacademiques->id)->take(3)->get();
                // dd($trimestres);
    
                foreach ($trimestres as $key => $trimestre) {
                    $mat = Coefficient::where('id_classe', $id_classe)->get();
                    foreach ($mat as $key => $matier) {
                        $notes = new Note();
                        $notes->matricule_eleve = $id;
                        $notes->prenom_eleve = $el->prenom_eleve;
                        $notes->nom_eleve = $el->nom_eleve;
                        $notes->code_ac = $anneeacademiques->code_ac;
                        $notes->code_cycle = $cy->id_cycle;
                        $notes->code_trimestre = $trimestre->id;
                        $notes->code_classe = $id_classe;
                        $notes->matiere = $matier->id;
    
                        $notes->save();
                    }
                }

                if ($ins) {
                    toastr()->success('Elève a été ajouté a une nouvelle classe');
                    return back();
                }

        }



        // $inscripts1 = Inscription::where('id_eleve', $el->id)->get();

        // dd($inscripts1);
        // foreach ($inscripts1 as $inscripts25) {
        //    // dd($anneeacademiques->id === $inscripts25->id_annee);
        //     if ($el->id == $inscripts25->id_eleve && $anneeacademiques->id == $inscripts25->id_annee) {
        //         toastr()->error('Cet Elève à déja  été inscrire cette année', 'Important');
        //         return back();
        //     } else{

        //         $ins = new Inscription();
        //         $ins->mat_eleve = $inscripts->mat_eleve;
        //         $ins->prenom_eleve = $el->prenom_eleve;
        //         $ins->nom_eleve = $el->nom_eleve;
        //         $ins->id_eleve = $id_eleve;
        //         $ins->id_annee = $anneeacademiques->id;
        //         $ins->code_cycle = $cy->id_cycle;
        //         $ins->code_classe = $id_classe;

        //         $ins->save();

        //         if ($ins) {
        //             toastr()->success('Elève a été ajouté a une nouvelle classe');
        //             return back();
        //         }
        //     }
        // }





        // $eleve = Eleve::where('nom_eleve', $ins->nom_eleve)->first();
        // $eleve->delete();

    }

    public function show()
    {


        $id_an = Anneeacademique::where('Statut_ac', 1)->first();
        $ins = Inscription::where('id_annee', $id_an->id)->get();
        //dd( $ins);
        return view('admin.inscrire.list', compact('ins'));
    }

    public function info($id)
    {
        $info = Inscription::where('id_eleve', $id)->first();
        $infoall = Eleve::where('id', $id)->first();
        // dd($info);

        return view('admin.inscrire.info', compact('info', 'infoall'));
    }


    public function edit($id)
    {
        $ins = Inscription::where('id_eleve', $id)->first();

        $classes = Classe::all();
        //$infoall = Eleve::where('id',$id)->first();
        // $ins = Inscription::find($id);
        // dd($ins);
        return view('admin.inscrire.edit', compact('ins', 'classes'));
    }




    public function update(Request $request, $id)
    {
        $id_classe = $request->classe;
        $cy = Classe::where('id', $id_classe)->first();
        // dd( $cy->id_cycle);
        $ins = Inscription::where('id_eleve', $id)->first();
        //dd( $cy->id_cycle);
        //$ins->mat_eleve = $id;
        //$ins->prenom_eleve = $el->prenom_eleve;
        //$ins->nom_eleve = $el->nom_eleve;
        //$ins->code_classe = $request->nom_matiere;
        // $ins->id_eleve = $id_eleve;
        // $ins->id_annee = $id_an->id;


        $ins->code_cycle = $cy->id_cycle;
        $ins->code_classe = $id_classe;
        $ins->save();
        // dd($ins);

        if ($ins) {
            toastr()->success("L'inscription Modifiée avec succés!", "Félicitation");
            return redirect()->route('inscrire.show');
        }
    }
    public function delete($id)
    {
        $ins = Inscription::find($id);
        $ins->delete();
        if ($ins) {
            toastr()->success(" L'inscription supprimée !!! ", "Félicitation");
            return redirect()->route('inscrire.show');
        }
    }
}
