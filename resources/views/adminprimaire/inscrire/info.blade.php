@extends('layouts.appprim')
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
                            href="/homeprim">Tableau de board</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Inscription</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Information de l'inscrit</li>
                </ol>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <div class="card">
                    <div class="card-body no-padding height-9">
                        <div class="row">
                                <div class="profile-userpic">
                                    @if($infoall->photo != '')
                                        <img src="{{asset('storage/app/public/eleves')}}/{{$infoall->photo}}"  alt="">
                                        @else
                                        <img src="{{asset('assets/img/dp.jpg')}}" alt="">
                                    @endif
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">{{$infoall->nom_eleve}} {{$infoall->prenom_eleve}} </div>
                                    <div class="profile-usertitle-job"> élève depuis {{$infoall->created_at}}</div>
                                </div>
                                <div class="profile-userbuttons">
                                
                                    <a type="button"  href="/adminprimaire/inscrire/list" class="btn btn-circle red btn-sm">Retour</a>
                                </div>
                        </div>
                    </div>
                </div>
            
            </div>
        
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <header>Information Personnelle</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel">
                                               

                                                <ul class="list-group list-group-unbordered">
                                                    <li class="list-group-item">
                                                        <b>Classe:</b> {{$info->classe->libelle_classe}}
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Sexe: </b>{{$infoall->sexe->libelle}}
                                                       
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Date et lieu de Naissance: </b>{{$infoall->date_nais}} à {{$infoall->lieu_naiss}}
                                                        
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Addresse:</b> {{$infoall->adresse}}
                                                        
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Nom du tuteur / trice: </b>{{$infoall->noms_parent}}
                                                        
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Contacte Tuteur / trice: </b>{{$infoall->contact_parent}}
                                                       
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Année Scolaire:</b> {{$info->ansss->code_ac}}
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
</div>    

    

@endsection