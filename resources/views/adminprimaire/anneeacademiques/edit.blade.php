@extends('layouts.appprim')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Année Scolaire</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Année Scolaire</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Modifier Année Scolaire</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">

                    <div class="card-body" id="bar-parent">
                        <form  id="form_sample_1" class="form-horizontal" action="{{route('anneeacademiques_prim.update',$anneeacademiques->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">


                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date debut
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-append date">
                                            <div id="dateIcon2" class="input-group datePicker">
                                                {{-- <input type="hidden" class="form-control isvalide" id="date_deb" name="date_deb" autocomplete="off"> --}}
                                                <input class="form-control" type="text" id="date_deb" name="date_deb" autocomplete="off"
                                                value="{{ old('date_deb') ?? $anneeacademiques->date_deb }}"  placeholder="Date debut" data-input required>
                                                <span class="dateBtn">
                                                    <a class="input-button" title="toggle" data-toggle>
                                                        <i class="icon-calendar"></i>
                                                    </a>
                                                    <a class="input-button" title="clear" data-clear>
                                                        <i class="icon-close"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date fin

                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-append date">
                                            <div id="dateIcon2" class="input-group datePicker">
                                                <input class="formDatePicker form-control" type="text"  id="date_fin" name="date_fin" autocomplete="off"
                                                value="{{ old('date_fin') ?? $anneeacademiques->date_fin }}" placeholder="Date fin" data-input required readonly>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group row">

                                    <label class="control-label col-md-3">Code de  l'année Accadémique
                                    </label>
                                    <div class="col-md-5">

                                        <input type="text" class="form-control isvalide" id="code_ac" name="code_ac" autocomplete="off"
                                        value="{{ old('code_ac') ?? $anneeacademiques->code_ac }}" aria-labelledby="placeholder-fname"  required readonly>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">

                                            <button type="submit"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">sauvegarder</button>
                                            <a  type="button" href="/adminprimaire/anneeacademiques/liste"
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

@section('scripts')

<script>

    $(document).ready(function() {
            $("#date_deb").change(function() {
            var inputDate = new Date(this.value).getFullYear();
            var findate = inputDate + 1;
            $(this).attr("value",inputDate);

            $("#date_deb").attr("value",inputDate);
            $("#date_fin").attr("value",findate);
            $("#code_ac").attr("value",inputDate+"-"+findate);

        });

        });







</script>

@endsection
