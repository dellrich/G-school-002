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
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/homeprim">Tableau de
                                board</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Inscription</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Liste des inscrits</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        {{-- <ul class="nav customtab nav-tabs" role="tablist">
                        <li class="nav-item"><a href="#tab1" class="nav-link active"
                                data-bs-toggle="tab">List
                                View</a></li>
                        <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
                                View</a></li>
                    </ul> --}}
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>Tous les éleves</header>

                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">

                                                    </div>
                                                </div>
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th> N° </th>
                                                            <th> Matricule</th>
                                                            <th> Nom </th>
                                                            <th> Prénoms </th>
                                                            <th> Sexe </th>
                                                            <th> Classe</th>
                                                            {{-- <th> Année Scolaire</th> --}}
                                                            <th> Action</th>

                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $x = 1;
                                                    @endphp


                                                    <tbody>
                                                        @foreach ($ins as $insc)
                                                            <tr>
                                                                <td>{{ $x++ }}</td>
                                                                <td>{{ $insc->mat_eleve }}</td>
                                                                <td>{{ $insc->nom_eleve }}</td>
                                                                <td>{{ $insc->prenom_eleve }}</td>
                                                                <td>{{ $insc->elevep->sexep->libelle }}</td>
                                                                <td>{{ $insc->classep->libelle_classe }}</td>
                                                                {{-- <td>
                                                                @foreach ($id_an as $id_ans)
                                                                    @if ($insc->id_annee == $id_ans->id)
                                                                    {{$id_ans->code_ac}}
                                                                    @endif
                                                                @endforeach
                                                            </td> --}}



                                                                <td>
                                                                    <a href="{{ route('inscrire_prim.info', $insc->id_eleve) }}"
                                                                        class="btn btn-primary btn-xs">
                                                                        <i class="fa fa-info"></i>
                                                                    </a>
                                                                    <a type="button"
                                                                        href="{{ route('inscrire_prim.edit', $insc->id_eleve) }}"
                                                                        class="tblEditBtn">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a class="tblDelBtn"
                                                                        href="{{ route('inscrire_prim.delete', $insc->mat_eleve) }}">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
@endsection
