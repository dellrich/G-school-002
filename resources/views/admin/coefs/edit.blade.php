@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Coéfficients</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Tableau de
                                board</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Modification du Coéfficients</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Modifier</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="card card-box col-md-6 col-sm-6 mx-auto">
                    <div class="col-md-6 col-sm-6 mx-auto">
                        <div class="card-body" id="bar-parent">
                            <form id="form_sample_1" class="form-horizontal" action="{{ route('coefs.update', $coefs->id) }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">


                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <select class="form-control cycle" style="text-align: center;"
                                                name="id_matiere">
                                                <option value="{{ old('id_matiere', $coefs->id_matiere) }}">
                                                    {{ $coefs->matierecoef->nom_matiere }}</option>

                                                <option value="">--- Matière ---</option>
                                                @foreach ($matieres as $matiere)
                                                    <option value="{{ $matiere->id }}">{{ $matiere->nom_matiere }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <select class="form-control semestre" style="text-align: center;"
                                                name="id_classe">
                                                <option value="{{ old('id_classe', $coefs->id_classe) }}">
                                                    {{ $coefs->classescoef->libelle_classe }}</option>
                                                <option value="">--- Classe ---</option>
                                                @foreach ($classes as $classe)
                                                    <option value="{{ $classe->id }}">{{ $classe->libelle_classe }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <input class="form-control" value="{{ old('coef', $coefs->coef) }}"
                                                type="number" style="text-align: center;" name="coef" />

                                        </div>




                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary" id="cataddbtn" type="submit"
                                                onclick="validate()">Modifier</button>
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
