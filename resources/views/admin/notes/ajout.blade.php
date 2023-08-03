@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Notes</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Tableau de
                                board</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Ajout de note</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Ajouter</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="card card-box col-md-6 col-sm-6 mx-auto">
                    <div class="col-md-6 col-sm-6 mx-auto">
                        <div class="card-body" id="bar-parent">
                            <form action="{{ route('note.paramsnote') }}" method="POST" class="">
                                @csrf
                                @method('post')
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div class="input-server">

                                            <input type="text" style="text-align: center;" class="form-control"
                                                value={{ $anneeacademiques->code_ac }} name="code_ac" id="code_ac"
                                                aria-describedby="helpId" placeholder="" readonly>

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <select class="form-control cycle" style="text-align: center;" name="matiere"
                                                >
                                                <option value="">-- Matière --</option>
                                                @foreach ($matieres as $matiere)
                                                    <option value="{{ $matiere->id }}">{{ $matiere->nom_matiere }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <select class="form-control semestre"  style="text-align: center;" name="code_trimestre" >
                                                <option value="">-- Trimestre --</option>
                                                @foreach ($trimestres as $trimestre)
                                                <option value="{{ $trimestre->id }}">{{ $trimestre->libel_trim }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <select class="form-control semestre"  style="text-align: center;" name="code_classe" >
                                                <option value="">-- Classe --</option>
                                                @foreach ($classes as $classe)
                                                <option value="{{ $classe->id }}">{{ $classe->libelle_classe }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>




                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary" id="cataddbtn" type="submit"
                                            onclick="validate()">Valider</button>
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
