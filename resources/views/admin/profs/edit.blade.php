
@extends('layouts.app')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Modifier un Professeur</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Professeur</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Modification d'un Professeur</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    
                    <div class="card-body" id="bar-parent">
                        <form  id="form_sample_1" class="form-horizontal" action="{{route('profs.update',$profs->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" value="{{ old('nom_prof') ?? $profs->nom_prof }}" name="nom_prof" data-required="1"
                                            placeholder="enter le nom"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Prénom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" value="{{ old('prenom_prof') ?? $profs->prenom_prof }}" name="prenom_prof" data-required="1"
                                            placeholder="enter le prenom"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                
                                
                               
                               
                               
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Sexe
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-select input-height" name="sexe">
                                            <option value="{{$profs->sexe}}">@if ($profs->sexe == 1) Masculin @else Féminin  @endif </option>

                                            @if ($profs->sexe == 1)
                                                <option value="2">Féminin</option>
                                            @endif
                                            @if ($profs->sexe == 2)
                                                <option value="1">Masculin</option>
                                            @endif

                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">N° Telephone
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input name="telephone" value="{{ old('telephone') ?? $profs->telephone }}" type="number" placeholder="numéro mobile"
                                            class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date de naissance
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-append date">
                                            <div id="dateIcon2" class="input-group datePicker">
                                                <input class="formDatePicker form-control" name="datenais_prof"  value="{{ old('datenais_prof') ?? $profs->datenais_prof }}" type="text"
                                                    placeholder="Selectionnez la Date" data-input>
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
                                    <label class="control-label col-md-3">Addresse
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea name="adresse"  
                                            class="form-control-textarea" rows="3">{{ old('adresse') ?? $profs->adresse }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Photo de Profile
                                    </label>
                                    <div class="col-md-5">
                                        <img style="max-width:75px; max-height:75px;" alt="image" src="{{asset('storage/app/public/professeur_photo')}}/{{$profs->photo}}">

                                        <input type="file" class="default" name="photo" value="{{ old('photo') ?? $profs->photo }}" accept=".png,.jpg" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Salaire
                                    </label>
                                    <div class="col-md-5">
                                        <input name="salaire" value="{{ old('salaire') ?? $profs->salaire }}" class="form-control"
                                            placeholder="salaire">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Mettre a jour</button>
                                                <a type="button"  href="/admin/profs/liste"
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