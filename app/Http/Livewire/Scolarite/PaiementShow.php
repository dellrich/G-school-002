<?php

namespace App\Http\Livewire\Scolarite;

use App\Models\Anneeacademique;
use App\Models\Classe;
use App\Models\Inscription;
use Livewire\Component;
use Livewire\WithPagination;

class PaiementShow extends Component
{
    use WithPagination;

    public $search, $selected_classe_id = null, $classes, $ac;

    public function render()
    {
        // if (isset($this->selected_classe_id)) {
        //     if (!empty($this->search)) {
        //         $inscriptionList = Inscription::where('nom_eleve','like',
        //         '%' . $this->search . '%')->orWhere('prenom_eleve','like',
        //         '%' . $this->search . '%')->paginate(10);
        //     } else {
        //         $inscriptionList = Inscription::where('code_classe', $this->selected_classe_id)->paginate(10);
        //     }
        // }else {
        //     if (!empty($this->search)) {
        //         $inscriptionList = Inscription::where('nom_eleve','like',
        //         '%' . $this->search . '%')->orWhere('prenom_eleve','like',
        //         '%' . $this->search . '%')->paginate(10);
        //     } else {
        //         $inscriptionList = Inscription::where('code_classe', $this->selected_classe_id)->paginate(10);
        //     }
        // }

        $this->ac = Anneeacademique::where('Statut_ac','1')->first();
        $this->classes = Classe::all();


        // dd($this->ac->id);
        return view('livewire.scolarite.paiement-show',[
            'classes' => $this->classes,
            'inscriptionList' => Inscription::when($this->classes, function($query){
                $query->where('code_classe', $this->selected_classe_id)->where('id_annee', $this->ac->id);
            })
                ->search(trim($this->search))
                ->paginate(10)
        ]);
    }
}
