<?php

namespace App\Http\Controllers;

use App\Models\Anneeacademique;
use App\Models\Classe;
use App\Models\Inscription;
use App\Models\Matiere;
use App\Models\Note;
use App\Models\Trimestre;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public $Notes;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $anneeacademiques = Anneeacademique::where('Statut_ac', 1)->first();
        $trimestres = Trimestre::where('id_annee', $anneeacademiques->id)->take(3)->get();
        // dd($anneeacademiques);
        $inscris = Inscription::where('id_annee', $anneeacademiques->id)->get();
        $matieres = Matiere::all();

        $classes = Classe::all();
        //dd($inscri,$matiere,$trimestre);
        return view('admin.notes.ajout', compact('anneeacademiques', 'inscris', 'matieres', 'trimestres', 'classes'));
    }

    public function precreate(Request $request)
    {
        $matiere = $request->matiere;
        $notsemestre  = $request->code_trimestre;
        $classe = $request->code_classe;
        $notcycle = Classe::where('id', $classe)->first();

        // $anneeaccademique = Anneeacademique::where('id',1)->first();

        $notanacademique = $request->code_ac;
        $notes = Note::all()->where('code_ac', $notanacademique)->where('code_cycle', $notcycle->id_cycle)->where('matiere', $matiere)->where('code_classe', $classe)->where('code_trimestre', $notsemestre);

        // dd($notes);
        return view('admin.notes.datatablenotes', compact('notes', 'notanacademique', 'matiere', 'notsemestre', 'classe', 'notcycle'));
    }

    public function sendall(Request $request)
    {
        $note = Note::all()->where('id', $request->id)->first();
        $note->moyenne_interro = $request->moyenne_interro;
        $note->interro1 = $request->interro1;
        $note->interro2 = $request->interro2;
        $note->update();
        return response()->json('mis a jour reussis');
    }

    public function sendallfin(Request $request)
    {
        $note = Note::all()->where('id', $request->id)->first();
        $note->moyenne_interro = $request->moyenne_interro;
        $note->interro1 = $request->interro1;
        $note->interro2 = $request->interro2;
        $note->devoir1 = $request->devoir1;
        $note->devoir2 = $request->devoir2;
        $note->moyenne = $request->moyenne;
        $note->statut_valide = $request->statut_valide;

        $note->update();
        return response()->json('mis a jour reussis');
    }

    // public function sendsemestre(Request $request)
    // {
    //     $semestresel = Trimestre::all()->where('id', $request->code_cycle);
    //     return response()->json($semestresel);
    // }

    public function sendnote(Request $request)
    {

        if ($request->ajax()) {
            if ($request->action == 'edit') {

                $note = Note::all()->where('id', $request->id)->first();

                if ($request->interro1 >= 0 && $request->interro1 < 21) {
                    if ($request->interro2 >= 0 && $request->interro2 < 21) {
                        $note->interro1 = $request->interro1;
                        $note->interro2 = $request->interro2;
                        $note->update();
                        return response()->json('mis a jour reussis pour note');
                    } else {
                        return response()->json('erreur sur une note,Verifier');
                    }
                } else {
                    return response()->json('erreur sur une note,Verifier');
                }
            }

            if ($request->action == 'delete') {
                $note = Note::all()->where('matricule_eleve', $request->matricule_eleve)->first();
                $note->delete();
                return response()->json('suppression avec succes');
            }
        }
    }

    public function update(Request $request, Note $note)
    {

        $note->interro1 = $request->interro1;
        $note->interro2 = $request->interro2;
        $note->moyenne_interro = $request->moyenne_interro;

        $note->devoir1 = $request->devoir1;
        $note->devoir2 = $request->devoir2;
        $note->moyennegene = $request->moyennegene;

        $note->update();
        return redirect()->route('note.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return back();
    }
}
