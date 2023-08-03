{{-- Datatables  pour l'enregistrement des notes --}}
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
                        <li><a class="parent-item" href="#">liste des note</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class=" col-xl-11 col-sm-10 mx-auto panel card recent-sales">
                    <div class="card-body">
                        <h3 class="card-title">Liste des notes </h3>
                        @csrf
                        <table id="editable" class="table table-bordered  table-striped">
                            <thead>
                                <tr style="text-align: center">
                                    <th>#</th>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Interro 1</th>
                                    <th>Interro 2</th>
                                    <th>Moyn.Interro</th>
                                    <th>Devoir I</th>
                                    <th>Devoir II</th>
                                    <th>Moyenne Géné</th>
                                    <th>Decision</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php
                                $k = 1;
                            @endphp
                            <tbody style="text-align: center">
                                @foreach ($notes as $note)
                                    <tr>
                                        <td>{{ $k++ }}</td>
                                        <td>{{ $note->matricule_eleve }}</td>
                                        <td>{{ $note->nom_eleve }}</td>
                                        <td>{{ $note->prenom_eleve }}</td>
                                        <td class="interro1">{{ $note->interro1 }}</td>
                                        <td class="interro2">{{ $note->interro2 }}</td>
                                        <td class="moy">{{ $note->moyenne_interro }}</td>
                                        <td class="devoir1">{{ $note->devoir1 }}</td>
                                        <td class="devoir2">{{ $note->devoir2 }}</td>
                                        <td class="moygene">{{ $note->moyennegene }}</td>
                                        <td class="stat">{{ $note->statut_valide == 0 ? 'Non valider' : 'valider' }}</td>

                                    </tr>
                                @endforeach


                                <input type="hidden" class="form-control" name="" id=""
                                    value="{{ $notanacademique }}">
                                <input type="hidden" class="form-control" name="" id=""
                                    value="{{ $notcycle }}">
                                <input type="hidden" class="form-control" name="notsemestre" id="notsemestre"
                                    value="{{ $notsemestre }}">
                                <input type="hidden" class="form-control" name="" id=""
                                    value="{{ $classe }}">
                                <input type="hidden" class="form-control" name="notue" id="notue"
                                    value="{{ $matiere }}">
                                {{-- <input type="hidden" class="form-control" name="notecu" id="notecu"
                            value="{{ $notecu->cod_ecu }}"> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('scripts')
    <script>
        $(document).ready(() => {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $("input[name=_token]").val()
                }
            });

            // $('td.interro1').change(() => {

            //     $('button.tabledit-save-button.btn.btn-sm.btn-success').click(() => {
            //         console.log('le note 1 change');

            //         let interro1 = $(
            //             'td.interro1.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
            //         ).val();
            //         // interro1 = parseFloat(interro1);

            //         let interro2 = $(
            //             'td.interro2.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
            //         ).val();
            //         // interro2 = parseFloat(interro2);

            //         if (interro1 >= 0 && interro1 < 21 && interro2 >= 0 && interro2 < 21) {
            //             let interro1coef = (interro1 * 0.4).toFixed(2);
            //             let interro2coef = (interro2 * 0.6).toFixed(2);

            //             interro1coef = Number(interro1coef);
            //             interro2coef = Number(interro2coef);

            //             let moy = ((interro1coef + interro2coef).toFixed(2));

            //             $('td.interro2.tabledit-edit-mode').next().text(moy);
            //             //  let celmoy = $('td.interro2.tabledit-edit-mode').next();

            //             // if (moy >= 10 && moy <= 20) {
            //             //     celmoy.next().text('valider');
            //             //     valid = 1;
            //             // } else {
            //             //     celmoy.next().text('non valider');
            //             //     valid = 0;
            //             // }

            //             let notsemes = $('#notsemestre').val();
            //             let id = $('td.interro1.tabledit-edit-mode').prev().prev().prev().prev()
            //                 .text();

            //             let ue = $('#notue').val();
            //             //let ecu = $('#notecu').val();

            //             // $.ajax({
            //             //     url: "{{ route('note.sendall') }}",
            //             //     method: "post",
            //             //     data: {
            //             //         id: id,
            //             //         moyenne: moy,
            //             //         statut_valide: valid,
            //             //         codue: ue,
            //             //         // codecu: ecu,
            //             //         code_semestre: notsemes

            //             //     },
            //             //     success: function(result) {
            //             //         console.log(result);
            //             //     }
            //             // });

            //         }

            //     });
            // });


            $('td.interro2').change(() => {

                $('button.tabledit-save-button.btn.btn-sm.btn-success').click(() => {
                    console.log('le click est fait , le change 2 ');

                    let interro1 = $(
                        'td.interro1.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
                    ).val();

                    let interro2 = $(
                        'td.interro2.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
                    ).val();

                    if (interro1 >= 0 && interro1 < 21 && interro2 >= 0 && interro2 < 21) {
                        let interro1coef = interro1;
                        let interro2coef = interro2;

                        interro1coef = Number(interro1coef);
                        interro2coef = Number(interro2coef);

                        let moy = ((interro1coef + interro2coef).toFixed(2)) / 2;

                        $('td.interro2.tabledit-edit-mode').next().text(moy);

                        //  let celmoy = $('td.interro2.tabledit-edit-mode').next();

                        // if (moy >= 10 && moy <= 20) {
                        //     celmoy.next().text('valider');
                        //     valid = 1;
                        // } else {
                        //     celmoy.next().text('non valider');
                        //     valid = 0;
                        // }

                        let notsemes = $('#notsemestre').val();
                        let id = $('td.interro1.tabledit-edit-mode').prev().prev().prev().prev()
                            .text();

                        let ue = $('#notue').val();
                        //  let ecu = $('#notecu').val();

                        console.log('je suis ici ' + notsemes);

                        $.ajax({
                            url: "{{ route('note.sendall') }}",
                            method: "post",
                            data: {
                                id: id,
                                moyenne_interro: moy,
                               
                                interro1:interro1coef,
                                interro2:interro2coef
                                
                                
                            },
                            success: function(result) {
                                console.log(result);
                            }
                        });


                        console.log('je suis ici apre le ajax');
                    }

                });


            });

            $('td.devoir2').change(() => {

                $('button.tabledit-save-button.btn.btn-sm.btn-success').click(() => {
                    console.log('le click est fait , le change devoir2 ');

                    let devoir1 = $(
                        'td.devoir1.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
                    ).val();

                    let devoir2 = $(
                        'td.devoir2.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
                    ).val();


                    let interro1 = $(
                        'td.interro1.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
                    ).val();

                    let interro2 = $(
                        'td.interro2.tabledit-edit-mode input.tabledit-input.form-control.input-sm'
                    ).val();



                    if (devoir1 >= 0 && devoir1 < 21 && devoir2 >= 0 && devoir2 < 21 && interro1 >=
                        0 && interro1 < 21 && interro2 >= 0 && interro2 < 21) {
                        let devoir1coef = devoir1;
                        let devoir2coef = devoir2;
                        let interro1coef = interro1;
                        let interro2coef = interro2;


                        devoir1coef = Number(devoir1coef);
                        devoir2coef = Number(devoir2coef);
                        interro1coef = Number(interro1coef);
                        interro2coef = Number(interro2coef);

                        let moy = ((interro1coef + interro2coef).toFixed(2)) / 2;
                        moycoef = Number(moy);

                        let moygene = (((moycoef + devoir1coef + devoir2coef).toFixed(2)) / 3)
                            .toFixed(2);

                        $('td.devoir2.tabledit-edit-mode').next().text(moygene);

                        let celmoygene = $('td.devoir2.tabledit-edit-mode').next();

                        if (moygene >= 10 && moygene <= 20) {
                            celmoygene.next().text('valider');
                            valid = 1;
                        } else {
                            celmoygene.next().text('non valider');
                            valid = 0;
                        }

                        let notsemes = $('#notsemestre').val();
                        let id = $('td.devoir2.tabledit-edit-mode').prev().prev().prev().prev()
                            .text();

                        let ue = $('#notue').val();
                        //  let ecu = $('#notecu').val();

                        console.log('je suis ici ' + notsemes);

                        $.ajax({
                            url: "{{ route('note.sendallfin') }}",
                            method: "post",
                            data: {
                                id: id,
                                moyenne_interro: moy,
                               
                                interro1:interro1coef,
                                interro2:interro2coef,
                                devoir1:devoir1coef,
                                devoir2:devoir2coef,
                              
                                moyennegene: moygene,
                                statut_valide: valid,
                                codue: ue,
                                //codecu: ecu,
                                code_semestre: notsemes

                            },
                            success: function(result) {
                                console.log(result);
                            }
                        });


                        console.log('je suis ici apre le ajax');
                    }

                });


            });

            $('#editable').Tabledit({

                url: '{{ route('note.sendnote') }}',
                dataType: "json",
                buttons: {
                    edit: {
                        class: 'btn btn-sm btn-primary mx-1 my-1',
                        html: '<span class="ri-edit-box-line"></span>',
                        action: 'edit'
                    },
                    delete: {
                        class: 'btn btn-sm btn-danger my-1',
                        html: '<span class="ri-delete-bin-3-line"></span>',
                        action: 'delete'
                    },
                    confirm: {
                        class: 'btn btn-sm btn-danger',
                        html: 'Confimer '
                    }
                },
                columns: {
                    identifier: [
                        0, 'id'
                    ],
                    editable: [
                        [4, 'interro1'],
                        [5, 'interro2'],
                        [7, 'devoir1'],
                        [8, 'devoir2'],

                    ]
                },
                restoreButton: false,
                onSuccess: function(note, textStatus, jqXHR) {
                    if (note.action == 'delete') {
                        $('#' + note.id).remove();
                    }
                    if (jqXHR.responseJSON == 'erreur sur une note,Verifier') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Erreur',
                            text: 'Erreur sur une note, elle doit etre comprise entre 0 et 20, si non elle sera pas enregistre',
                            showDenyButton: false,
                            showCancelButton: false,
                            confirmButtonText: 'Ok'
                        })
                    }
                }
            })
        });
    </script>
@endsection
