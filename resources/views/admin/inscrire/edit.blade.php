@extends('layouts.app')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Inscription</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Tableau de board</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Inscription</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Modifier</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                            <header>Modification d'une inscription</header>
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
                        <form class="form-horizontal" action="{{route('inscrire.update',$ins)}}" method="post" >
                            @csrf
                            <div class="form-body">

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom et Prénoms de l'éleve
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="libelle_classe" value="{{$ins->nom_eleve}} {{$ins->prenom_eleve}}" disabled
                                        class="form-control input-height" />
                                        {{-- <select name="eleve" value="{{ old('libelle_classe') ?? $ins->libelle_classe }}" class="form-select js-example-basic-single">
                                            <option value="">-- Veuillez sélectionner le nom de l'éleve --</option>
                                            @foreach ($eleves as $eleve)
                                            <option value="{{$eleve->id}}">{{$eleve->nom_eleve}}-{{$eleve->prenom_eleve}}</option>
                                            @endforeach
                                           
                                        </select> --}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Classe
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select name="classe" id="classe" class="form-select input-height">
                                            @foreach ($classes as $classe)
                                                <option value="{{$classe->id}}">{{$classe->libelle_classe}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Valider</button>
                                            <a type="button"  href="/admin/inscrire/list" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Annuler</a>
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
