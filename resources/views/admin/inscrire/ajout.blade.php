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
                    <li class="active">Ajouter</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                            <header>Inscrire un éleve</header>
                           
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{route('inscrire.store')}}" id="" class="form-horizontal" method="post">
                            @csrf
                            <div class="form-body">

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Nom et Prénoms de l'éleve
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select name="eleve"  class="form-select js-example-basic-single">
                                            <option value="">-- Veuillez sélectionner le nom de l'éleve --</option>
                                            @foreach ($eleves as $eleve)
                                            <option value="{{$eleve->id}}">{{$eleve->nom_eleve}}-{{$eleve->prenom_eleve}}</option>
                                                {{-- @foreach ($inscripts as $inscript)


                                                @if ($eleve->id == $inscript->id_eleve and $anneeacademiques->id == $inscript->id_annee)
                                                    <option   value="{{$inscript->id_eleve}}">{{$inscript->nom_eleve}}-{{$inscript->prenom_eleve}} **Déja inscrire**</option>

                                                @endif
                                                @if($eleve->id != $inscript->id_eleve )
                                                    <option value="{{$eleve->id}}">{{$eleve->nom_eleve}}-{{$eleve->prenom_eleve}}</option>


                                                @endif



                                                @endforeach --}}

                                            @endforeach

                                            {{-- @while ($eleves->id == $inscripts->id_eleve)
                                              <option value="{{$inscripts->id_eleve}}">{{$inscripts->nom_eleve}}-{{$inscripts->prenom_eleve}}</option>

                                            @endwhile --}}

                                        </select>
                                        {{-- <?=$personnel['image_personnel'] !=avatar.png ? $personnel['image_personnel'] : avatar.png; ?> --}}
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
                                            <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Annuler</button>
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
