@extends('layouts.app')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Modification de la Matiere</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Matières</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Modifier une Matiere</li>
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
                        <form id="form_sample_1" class="form-horizontal" action="{{route('matieres.update',$matieres->id)}}" method="post" >
                            @csrf
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom de la Matière
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="nom_matiere" value="{{ old('nom_matiere') ?? $matieres->nom_matiere }}" placeholder="entrez la matiere"
                                            class="form-control input-height" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Metre a jour</button>
                                            <a type="button"  href="/admin/matieres/liste"
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
