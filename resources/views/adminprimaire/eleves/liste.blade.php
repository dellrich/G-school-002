@extends('layouts.appprim')

@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Liste des éleves</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/homeprim">Tableau de
                                board</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Eleves</a>&nbsp;
                            {{-- <i class="fa fa-angle-right"></i> --}}
                        </li>
                        {{-- <li class="active">Liste des éleves</li> --}}
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
                                                {{--  <div class="tools">
                                                <a class="fa fa-repeat btn-color box-refresh"
                                                    href="javascript:;"></a>
                                                <a class="t-collapse btn-color fa fa-chevron-down"
                                                    href="javascript:;"></a>
                                                <a class="t-close btn-color fa fa-times"
                                                    href="javascript:;"></a>
                                            </div> --}}
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="{{ route('eleve_prim.create') }}" id="addRow"
                                                                class="btn btn-primary">
                                                                Ajouter<i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table
                                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                    id="example4">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th> Nom </th>
                                                            <th> Prénoms </th>
                                                            <th> date Nais </th>
                                                            <th> Lieu Nais </th>
                                                            <th> Sexe </th>
                                                            <th> Adresse </th>
                                                            <th> Contact Parent </th>
                                                            <th> Action </th>
                                                        </tr>
                                                    </thead>

                                                  



                                                    <tbody>
                                                        @foreach ($eleves as $eleve)
                                                            <tr class="odd gradeX">
                                                                <td class="patient-img">
                                                                    @if ($eleve->id_sexe == 1)
                                                                        <img src="{{ asset('assets/img/user/user4.jpg') }}"
                                                                            alt="">
                                                                    @else
                                                                        <img src="{{ asset('assets/img/user/user2.jpg') }}"
                                                                            alt="">
                                                                    @endif
                                                                </td>
                                                                <td class="left">{{ $eleve->nom_eleve }}</td>
                                                                <td>{{ $eleve->prenom_eleve }}</td>
                                                                <td>{{ $eleve->date_nais }}</td>
                                                                <td class="left">{{ $eleve->lieu_naiss }}</td>
                                                                <td>{{ $eleve->sexeP->libelle }}</td>
                                                                <td>{{ $eleve->adresse }}</td>
                                                                <td>{{ $eleve->contact_parent }}</td>
                                                                <td>
                                                                    <a href="{{ route('eleve_prim.edit', $eleve->id) }}"
                                                                        class="tblEditBtn">
                                                                        <i class="fa fa-pencil"></i>
                                                                    </a>
                                                                    <a class="tblDelBtn delete-confirm"
                                                                        href="{{ route('eleve_prim.delete', $eleve->id) }}">
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

@section('scripts')
    <script>
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Supprimer?',
                text: 'Etes-vous sur de vouloir supprimer cet éleve!',
                icon: 'warning',
                buttons: ["Non", "Oui!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>
@endsection
