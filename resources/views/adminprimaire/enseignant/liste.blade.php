@extends('layouts.appprim')

@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Liste Enseignants </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/homeprim">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Enseignant</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Liste des enseignants</li>
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
                                            <header>Tout les enseignants</header>
                                            
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="/adminprimaire/enseignant/ajout" id="addRow"
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
                                                        <th>Photo</th>
                                                        <th> Nom </th>
                                                        <th> Prenom </th>
                                                        <th> Date de naissance  </th>
                                                        <th> Addresse </th>
                                                        <th> sexe </th>
                                                        <th> Mobile </th>
                                                        <th> Salaire </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                              

                                                <tbody>
                                                    @foreach ($profs as $profs)
                                                        <tr>

                                                            
                                                            <td class="patient-img">
                                                                <img src="{{asset('storage/app/public/enseignant_photo')}}/{{$profs->photo}}" alt="">
                                                            </td>
                                                            
                                                            <td class="content-center">
                                                              {{   $profs->nom_prof }}
                                                            </td>
                                                            <td class="content-center">
                                                                {{  $profs->prenom_prof }}
                                                            </td>
                                                            <td class="content-center">
                                                                {{  $profs->datenais_prof }}
                                                            </td>
                                                            <td class="content-center">
                                                                {{  $profs->adresse }}
                                                            </td>

                                                            <td>
                                                                
                                                                    
                                                                @if ($profs->sexe=="1")
                                                                    Masculin
                                                                @endif
                                                                    
                                                                @if ($profs->sexe=="2")
                                                                   Féminin
                                                                @endif
                                                           
                                                        </td>
                                                            <td class="content-center">
                                                                {{  $profs->telephone }}
                                                            </td>

                                                            <td class="content-center">
                                                                {{  $profs->salaire }}
                                                            </td>
                                                          
                                                            
                                                            

                                                            <td>
                                                                <a type="button" href="{{route('enseignant.edit',$profs->id)}}" class="tblEditBtn">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a class="tblDelBtn" href="{{route('enseignant.delete',$profs->id)}}">
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