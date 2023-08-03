@extends('layouts.appprim')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Liste des matieres </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/homeprim">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">matières</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Liste des matières</li>
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
                                            <header>Toutes les matières</header>

                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="/adminprimaire/matieres/ajout" id="addRow"
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
                                                        <th>  N°  </th>

                                                        <th> Intituler  </th>

                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $x=1;
                                                @endphp


                                                <tbody>
                                                    @foreach ($matieres as $matieres)
                                                        <tr>


                                                          <td>{{ $x++ }}</td>

                                                            <td class="content-center">
                                                              {{   $matieres->nom_matiere }}
                                                            </td>

                                                           

                                                            <td>
                                                                <a type="button" href="{{route('matieres_prim.edit',$matieres->id)}}" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn" href="{{route('matieres_prim.delete',$matieres->id)}}">
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
