@extends('layouts.appprim')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        {{-- <div class="page-title">Liste des Années Scolaire</div> --}}
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Années Scolaire</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Liste des Années Scolaire</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">

                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-box">
                                            <div class="card-head">
                                                <header>Liste des Années Scolaire</header>

                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="/adminprimaire/anneeacademiques/ajout" id="addRow"
                                                                class="btn btn-primary">
                                                                Ajouter <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th> N° </th>
                                                            <th>Code année</th>
                                                            <th>Debut</th>
                                                            <th>Fin</th>
                                                            <th>Statut</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $x = 1;
                                                    @endphp



                                                    <tbody>
                                                        @foreach ($anneeacademiques as $anneeacademiques)
                                                            <tr>
                                                                <td>{{ $x++ }}</td>
                                                                <td><a href="#"> {{ $anneeacademiques->code_ac }}</a>
                                                                </td>

                                                                <td class="content-center">
                                                                    {{ $anneeacademiques->date_deb }}
                                                                </td>
                                                                <td class="content-center">
                                                                    {{ $anneeacademiques->date_fin }}
                                                                </td>

                                                                <td>


                                                                    @if ($anneeacademiques->Statut_ac == '0')
                                                                        <a href="{{ route('anneeacademiques_prim.active', $anneeacademiques->id) }}"
                                                                            class="mdl-switch mdl-js-switch mdl-js-ripple-effect"for="switch-9">

                                                                            &nbsp; <input type="checkbox" id="switch-9"
                                                                                class="mdl-switch__input"> Fermer

                                                                        </a>
                                                                    @endif

                                                                    @if ($anneeacademiques->Statut_ac == '1')
                                                                        <a class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                                            for="switch-8"
                                                                            href="{{ route('anneeacademiques_prim.active', $anneeacademiques->id) }}">

                                                                            <input type="checkbox" id="switch-8"
                                                                                class="mdl-switch__input" checked> &nbsp;
                                                                            Ouvert

                                                                        </a>
                                                                    @endif

                                                                </td>


                                                                <td>
                                                                    <a type="button"
                                                                        href="{{ route('anneeacademiques_prim.edit', $anneeacademiques->id) }}"
                                                                        class="tblEditBtn">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    {{-- <a class="tblDelBtn">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a> --}}

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
