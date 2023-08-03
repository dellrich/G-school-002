@extends('layouts.app')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Liste des trimestres</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Accueil</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Coéfficient</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Liste des trimestres</li>
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
                                                <header>Tout les trimestres</header>

                                            </div>
                                            <div class="card-body ">
                                                {{-- <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="/admin/coefs/ajout" id="addRow"
                                                            class="btn btn-primary">
                                                            Ajouter <i class="fa fa-plus"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div> --}}
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th> Année scolaire </th>
                                                            <th >Trimestres </th>
                                                            <th>Date Debut</th>
                                                            <th>Date Fin</th>


                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>
                                                   



                                                    <tbody>
                                                        @foreach ($trimestres as $trimestre)
                                                            <tr>
                                                                <td></td>
                                                                <td class="content-center">
                                                                    {{ $trimestre->antrimestre->code_ac }}
                                                                </td>
                                                                <td class="content-center">
                                                                    {{ $trimestre->libel_trim }}
                                                                </td>

                                                                <td> {{ $trimestre->date_debut }}</td>
                                                                <td> {{ $trimestre->date_fin }}</td>

                                                                <td>
                                                                    <a type="button"
                                                                        href="{{ route('trimestres.edit', $trimestre->id) }}"
                                                                        class="tblEditBtn">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    {{-- <a class="tblDelBtn"
                                                                        href="{{ route('trimestres.delete', $trimestre->id) }}">
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
