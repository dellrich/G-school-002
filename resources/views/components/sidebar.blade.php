
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="100" style="padding-top: 5px">
                {{-- <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li> --}}

                <li class="nav-item start active open">
                    <a href="/home" class="nav-link nav-toggle">
                        <i data-feather="airplay"></i>
                        <span class="title">Tableau de bord</span>


                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="calendar"></i>
                        <span class="title">Gestion année Scolaire</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="/admin/anneeacademiques/ajout" class="nav-link "> <span
                                    class="title">Ajouter Année</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/anneeacademiques/liste" class="nav-link "> <span class="title">Liste des
                                Année</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/trimestres/liste" class="nav-link "> <span class="title">Définir les trimestres</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="user"></i>
                        <span class="title">Gestion des Professeurs</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="/admin/profs/ajout" class="nav-link "> <span
                                    class="title">Ajouter Professeurs</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/profs/liste" class="nav-link "> <span class="title">Liste des
                                    Professeurs</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i data-feather="anchor"></i>
                        <span class="title">Gestion des inscriptions</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="/admin/inscrire/index" class="nav-link "> <span class="title">Faire une
                                inscription</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/inscrire/list" class="nav-link "> <span class="title">Liste des
                                inscriptions</span>
                            </a>
                        </li>



                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"><i data-feather="users"></i>
                        <span class="title">Gestion des éleves</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="{{route('eleve.create')}}" class="nav-link "> <span class="title">Ajouter un
                                Eleve</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('eleve.index')}}" class="nav-link "> <span class="title">Liste des
                                Eleves</span>
                            </a>
                        </li>



                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="briefcase"></i>
                        <span class="title">Gestion des classes</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="/admin/classes/ajout" class="nav-link "> <span class="title">Ajouter une classe</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/classes/liste" class="nav-link "> <span class="title">Toutes les classes</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="book"></i>
                        <span class="title">Gestion des matières</span> <span class="arrow"></span>

                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="/admin/matieres/ajout" class="nav-link "> <span class="title">Ajouter un Matière</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/matieres/liste" class="nav-link "> <span class="title">Liste Matières</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/admin/matieres/coefficient" class="nav-link "> <span class="title">Coéfficient</span>
                            </a>
                        </li> --}}



                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="layout"></i>
                        <span class="title">Gestion des coéfficients</span> <span class="arrow"></span>

                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="/admin/coefs/ajout" class="nav-link "> <span class="title">Ajouter un coéfficient</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/coef/liste" class="nav-link "> <span class="title">Liste des coéfficient par matiere et classe</span>
                            </a>
                        </li>




                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="book-open"></i>
                        <span class="title">Gestion des notes</span> <span class="arrow"></span>

                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('noteinfos') }}" class="nav-link "> <span class="title">Ajouter une note</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link "> <span class="title">Liste des notes</span>
                            </a>
                        </li>



                    </ul>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="smile"></i>
                        <span class="title">Gestion du Personnels</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="all_staffs.html" class="nav-link "> <span class="title">Tout le personnel</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="add_staff_bootstrap.html" class="nav-link "> <span class="title">Ajouter du personnel</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle"> <i data-feather="dollar-sign"></i>
                        <span class="title">Scolarités</span> <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">


                        <li class="nav-item">
                            <a href="/admin/scolarites/index" class="nav-link "> <span class="title">Effectuer un paiement</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/scolarites/liste" class="nav-link "> <span class="title">Liste des paiements</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="fees_receipt.html" class="nav-link "> <span class="title">Fee
                                    Receipt</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>



                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
