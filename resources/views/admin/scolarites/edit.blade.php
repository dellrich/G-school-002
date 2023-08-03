@extends('layouts.app')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Scolarités</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Tableau de board</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Scolarités</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Enregistrer le payement d'une scolarités</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header> Détails </header>


                    </div>
                    <div class="card-body" id="bar-parent">
                        <form id="form_sample_1" class="form-horizontal" action="{{route('scolarites.update',$classes->id)}}" method="post" >
                            @csrf


                            <div class="form-body">

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Cycle
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="col-md-5">
                                            <input type="text" name="libelle_classe" value=" {{$infoall->nom_eleve}} {{$infoall->prenom_eleve}}" placeholder="entrez la classe"
                                                class="form-control input-height" />
                                        </div>


                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="control-label col-md-3">Intitulé de la classe
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="libelle_classe" value="{{ old('libelle_classe') ?? $classes->libelle_classe }}" placeholder="entrez la classe"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">1 ere Tranche
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" id="tranche1" value="{{ old('tranche1') ?? $classes->tranche1 }}" name="tranche1" placeholder="entrez le montant"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">2 eme Tranche
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number"  id="tranche2" value="{{ old('tranche2') ?? $classes->tranche2 }}" name="tranche2" placeholder="entrez le montant"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">3 eme Tranche
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number"  id="tranche3" name="tranche3" value="{{ old('tranche3') ?? $classes->tranche3 }}" placeholder="entrez le montant"
                                            class="form-control input-height" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Totale de la scolarité

                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" value="{{ old('scolarite') ?? $classes->scolarite }}" id="scolarite" name="scolarite" disabled autocomplete="off"
                                            class="form-control input-height" />
                                    </div>
                                </div> --}}

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Enregistrer</button>
                                                <a type="button"  href="/admin/scolarites/ajout"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Annuler</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
