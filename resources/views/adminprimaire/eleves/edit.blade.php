@extends('layouts.appprim')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Modifier un éleve</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/homeprim">Tableau de board</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('eleve_prim.index')}}">Eleves</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Modifier</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Modification de l'éleve</header>
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
                        <form action="{{route('eleve_prim.update',$eleves->id)}}" id="" class="form-horizontal" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="firstname" placeholder="entrer le nom"
                                            class="form-control input-height"
                                            value="{{$eleves->nom_eleve}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Prénoms
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="lastname" placeholder="enter les prénoms"
                                            class="form-control input-height"
                                            value="{{$eleves->prenom_eleve}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date de naissance
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-append date">
                                            <div id="dateIcon" class="input-group datePicker">
                                                <input class="formDatePicker form-control" type="text"
                                                    placeholder="Select Date.." name="datenais" data-input
                                                    value="{{$eleves->date_nais}}">
                                                <span class="dateBtn">
                                                    <a class="input-button" title="toggle" data-toggle>
                                                        <i class="icon-calendar"></i>
                                                    </a>
                                                    <a class="input-button" title="clear" data-clear>
                                                        <i class="icon-close"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Lieu de naissance
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="lieunais" placeholder="enter le lieu de naissance"
                                            class="form-control input-height"
                                            value="{{$eleves->lieu_naiss}}"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Sexe
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-select input-height" name="sexe">
                                            <option value="{{$eleves->id_sexe}}">{{$eleves->sexe->libelle}}</option>

                                            @if ($eleves->id_sexe == 1)
                                                <option value="2">Féminin</option>
                                            @endif
                                            @if ($eleves->id_sexe == 2)
                                                <option value="1">Masculin</option>
                                            @endif

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom du Parent / tuteur
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="parentName"
                                            placeholder="entrer le nom du parent ou du tuteur"
                                            class="form-control input-height"
                                            value="{{$eleves->noms_parent}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Numéro du Parent / tuteur
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input name="number" type="text" placeholder="numéro parents ou tuteur"
                                            class="form-control input-height"
                                            value="{{$eleves->contact_parent}}"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea name="address" placeholder="address"
                                            class="form-control-textarea" rows="5">{{$eleves->adresse}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Profile Picture
                                    </label>
                                    <div class="col-md-5">
                                        <input type="file" class="default" multiple>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Valider</button>
                                            <a type="button"  href="/adminprimaire/eleves/liste" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Annuler</a>
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
