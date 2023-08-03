@extends('layouts.app')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Trimestres</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/">Tableau de
                                board</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Modification du Trimestres</a>&nbsp;<i
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
                            <form id="form_sample_1" class="form-horizontal"
                                action="{{ route('trimestres.update', $trimestres->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">


                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <label for="Annnée Scolaire">Annnée Scolaire</label>
                                            <input type="text" style="text-align: center;" class="form-control"
                                                value={{ old('id_annee', $trimestres->antrimestre->code_ac) }} name="id_annee" 
                                                aria-describedby="helpId" placeholder="" readonly>


                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-server">
                                            <label for="Trimestres">Trimestres</label>
                                            <input type="text" style="text-align: center;" class="form-control"
                                                value={{ old('libel_trim', $trimestres->libel_trim) }} name="code_ac" 
                                                aria-describedby="helpId" placeholder="" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="Date_debut">Date debut</label>
                                        <div class="input-server">
                                            <input type="date" style="text-align: center;" class="form-control"
                                            value={{ old('date_debut', $trimestres->date_debut) }} name="date_debut" 
                                            aria-describedby="helpId" placeholder="" >

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Date_fin">Date Fin</label>
                                        <div class="input-server">
                                            <input type="date" style="text-align: center;" class="form-control"
                                            value={{ old('date_fin', $trimestres->date_fin) }} name="date_fin" 
                                            aria-describedby="helpId" placeholder="" >

                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary" id="cataddbtn" type="submit"
                                                onclick="validate()">Modifier</button>
                                                <a href="/admin/trimestres/liste" class="btn btn-danger" id="cataddbtn" type="submit"
                                                >Retour</a>
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
