<?php

namespace App\Http\Livewire\Scolarite;

use Livewire\Component;
use App\Models\Anneeacademique;
use App\Models\ClassePrim;
use App\Models\InscriptionPrim;
use Livewire\WithPagination;

class ScolaritePrmaireComponent extends Component
{

    use WithPagination;

    public $search, $selected_classe_id = null, $classes, $ac;

    public function render()
    {
      

        $this->ac = Anneeacademique::where('Statut_ac', '1')->first();
        $this->classes = ClassePrim::all();


        // dd($this->ac->id);
        return view('livewire.scolarite.scolarite-prmaire-component', [
            'classes' => $this->classes,
            'inscriptionList' => InscriptionPrim::when($this->classes, function ($query) {
                $query->where('code_classe', $this->selected_classe_id)->where('id_annee', $this->ac->id);
            })
                ->search(trim($this->search))
                ->paginate(10)
        ]);
    }

}
