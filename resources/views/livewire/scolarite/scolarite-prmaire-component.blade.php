<div>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Scolarités</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Tableau de
                                board</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Scolarités</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Enregistrer un paiement</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-box">
                        <div class="card-head">
                            <header>Effectuer un paiement</header>
                            {{-- <button id="panel-button"
                                class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button> --}}
                            {{-- <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                data-mdl-for="panel-button">
                                <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                                </li>
                                <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                                    here</li>
                            </ul> --}}
                        </div>
                        <div class="card-body" id="bar-parent">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Classe:</label>
                                        <div class="col-sm-3">
                                            <select name="" wire:model="selected_classe_id" class="form-control">
                                                <option value="" selected>-Choisir-</option>
                                                @foreach ($classes as $classe)
                                                    <option value="{{ $classe->id }}">{{ $classe->libelle_classe }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3 row float-end">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Rechercher:</label>
                                        <div class="col-sm-8">
                                          <input type="text" wire:model.debounce.350ms="search" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle">
                                    <thead>
                                        <tr>
                                            <th> Matricule</th>
                                            <th> Nom </th>
                                            <th> Prenom </th>
                                            <th> sexe </th>search_prim
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{ $inscriptionList }} --}}
                                        @forelse ($inscriptionList as $inscrire)
                                            <tr>
                                                <td>{{ $inscrire->mat_eleve }}</td>
                                                <td>{{ $inscrire->nom_eleve }}</td>
                                                <td>{{ $inscrire->prenom_eleve }}</td>
                                                <td>{{ $inscrire->elevep->sexep->libelle }}</td>
                                                <td>
                                                    <a type="button" href="{{ route('search_prim.eleve',$inscrire->id_eleve) }}" class="tblEditBtn">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">Pas de données</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
