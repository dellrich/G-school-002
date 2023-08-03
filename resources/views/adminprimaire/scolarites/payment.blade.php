@extends('layouts.appprim')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Scolarité</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Tableau de board</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Scolarité</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Paiement de la Scolarité</li>
                </ol>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <div class="card">
                    <div class="card-head">
                        <header>Information Eleve</header>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row">

                                <div class="profile-userpic">
                                    {{-- @if($infoall->photo != '')
                                        <img src="{{asset('storage/app/public/eleves')}}/{{$infoall->photo}}"  alt="">
                                        @else
                                        <img src="{{asset('assets/img/dp.jpg')}}" alt="">
                                    @endif --}}
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">Nom: {{ $ele_id->nom_eleve }}</div>
                                    <div class="profile-usertitle-name">Prénom: {{ $ele_id->prenom_eleve }}</div>
                                    <div class="profile-usertitle-job"><b>Date et lieu de Naissance: {{ $ele_id->date_nais }}</b> à {{ $ele_id->lieu_naiss }}</div>
                                    <div class="profile-usertitle-job"> <b>Sexe: </b>{{$ele_id->sexep->libelle}}</div>
                                </div>
                                {{-- <div class="profile-userbuttons">

                                    <a type="button"  href="/admin/inscrire/list" class="btn btn-circle red btn-sm">Retour</a>
                                </div> --}}
                        </div>
                    </div>

                </div>

            </div>

            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <header>Scolarité</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel">


                                                <ul class="list-group list-group-unbordered">
                                                    <li class="list-group-item">
                                                        <b>Classe :</b> {{$classe->libelle_classe}}
                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Montant Scolarité : {{$classe->scolarite}}</b>

                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Reste : {{ $mtant_due }}</b>

                                                    </li>
                                                    <li class="list-group-item">
                                                        <b>Montant versé : {{ $mtant_verse }}</b> 

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
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->
            <div class="profile-sidebar">
                <div class="card">
                    <div class="card-head">
                        <header>Paiement</header>
                    </div>
                    <div class="card-body no-padding height-9">
                        <div class="row">

                            <form action="{{ route('paiemt_prim.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="insc_id" value="{{ $classes->id }}">
                                <input type="hidden" name="scolarite" value="{{ $classes->scolarite }}">
                                <label for="Tranche1">1ere Tranche: {{$classe->tranche1}}</b> </label> 
                                @if ( $mtant_verse >= $classe->tranche1)
                                    <i style="color: green" class="fa-solid fa-check"></i> <br>
                                @endif
                                <label for="tranche2"> 2eme Tranche: {{$classe->tranche2}}</label>
                                @if ( $mtant_verse >= $classe->tranche2)
                                    <i style="color: green" class="fa-solid fa-check"></i> <br>
                                @endif                               
                                <label for="tranche3">3eme Tranche: {{$classe->tranche3}}</label>
                                @if ( $mtant_verse >= $classe->scolarite)
                                    <i style="color: green" class="fa-solid fa-check"></i> <br>
                                @endif
                                <br><br>
                                <div class="mb-3">
                                    <label for="">Montant du versement</label>
                                    <input type="number" name="mtant" required>
                                </div>
                                
                                <button class="btn btn-primary" type="submit">Valider</button>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <header>Historiques</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle">
                                                <thead>
                                                    <tr>
                                                        <th> N° </th>
                                                        <th> Date</th>
                                                        <th> Montant </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($pmt as $key => $pt)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ $pt->created_at->format('d-m-Y') }}</td>
                                                        <td>{{ $pt->mtant }}</td>
                                                    </tr>   
                                                    @empty
                                                        <tr>
                                                            <td colspan="3"> Aucun paiement éffectué</td>
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

            </div>
        </div>
    </div>
</div>
</div>



@endsection