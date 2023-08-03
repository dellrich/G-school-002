@extends('layouts.app')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Ajouter un Professeur</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Professeur</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Ajout Professeur</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    
                    <div class="card-body" id="bar-parent">
                        <form  id="form_sample_1" class="form-horizontal"action="{{route('profs.store')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="nom_prof" data-required="1"
                                            placeholder="enter le nom"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Prénom
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="prenom_prof" data-required="1"
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
                                            <option value="">Selectionnez</option>
                                            <option value="1">Masculin</option>
                                            <option value="2">Féminin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">N° Telephone
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input name="telephone" type="text" placeholder="numéro mobile"
                                            class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date de naissance
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-append date">
                                            <div id="dateIcon2" class="input-group datePicker">
                                                <input class="formDatePicker form-control" name="datenais_prof" type="date"
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
                                        <textarea name="adresse" placeholder="adresse"
                                            class="form-control-textarea" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Photo de Profile
                                    </label>
                                    <div class="col-md-5">
                                        <input type="file" class="default" name="photo"  accept=".png,.jpg" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Salaire
                                    </label>
                                    <div class="col-md-5">
                                        <input name="salaire" class="form-control"
                                            placeholder="salaire">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Enregistrer</button>
                                            <button type="reset"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Annuler</button>
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