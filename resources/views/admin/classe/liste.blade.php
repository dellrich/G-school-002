@extends('layouts.app')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Liste des Classes  </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Classes</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Liste des Classes</li>
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
                                            <header>Toutes les Classes</header>
                                            
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="/admin/classes/ajout" id="addRow"
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
                                                        <th> N°  </th>
                                                      
                                                        <th> Cycle  </th>
                                                        <th> Classe  </th>
                                                        <th> 1ere Tranche  </th>
                                                        <th> 2eme Tranche  </th>
                                                        <th> 3eme Tranche  </th>
                                                        <th> Total  </th>
                                                       
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                              

                                                <tbody>
                                                    @foreach ($classes as $classes)
                                                        <tr>

                                                            
                                                          <td>#</td>
                                                            
                                                            <td class="content-center">{{   $classes->id_cycle }}</td>
                                                            <td class="content-center">{{   $classes->libelle_classe }}</td>

                                                            <td class="content-center">{{   $classes->tranche1 }}</td>

                                                            <td class="content-center">{{   $classes->tranche2 }}</td>

                                                            <td class="content-center">{{   $classes->tranche3 }}</td>
                                                            <td class="content-center">{{   $classes->scolarite }}</td>



                                                           
                                                            
                                                            

                                                            <td>
                                                                <a type="button" href="{{route('classes.edit',$classes->id)}}" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn" href="{{route('classes.delete',$classes->id)}}">
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