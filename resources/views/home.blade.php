@extends('layouts.app')

@section('content')

<div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class=" pull-left">
                                    <div class="page-title">Tableau de Bord cours secondaire</div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                            href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Tableau de Bord </li>
                                </ol>
                            </div>
                        </div>
                        <!-- start widget -->
                        <div class="state-overview">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel grey">
                                        <div class="symbol">
                                            <i class="fa fa-graduation-cap"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h3" data-counter="counterup" data-value="23"><marquee>{{ $anneescolaireencours->code_ac}}</marquee></p>
                                            <p>Année Scolaire</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel purple">
                                        <div class="symbol">
                                            <i class="fa fa-users usr-clr"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23">{{ $teve }}</p>
                                            <p>Total des Eleves</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel  bg-b-yellow">
                                        <div class="symbol">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">{{ $tprof}}</p>
                                            <p>Professeurs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel bg-b-blue">
                                        <div class="symbol">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="14">{{  $tma }}</p>
                                            <p>Matières</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel bg-b-pink">
                                        <div class="symbol">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">0</p>
                                            <span>XoF</span>
                                            <p>Frais Total</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="overview-panel bg-b-green">
                                        <div class="symbol">
                                            <i class="fa fa-school"></i>
                                        </div>
                                        <div class="value white">
                                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">{{ $tclass }}</p>
                                           
                                            <p>Classes</p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                               
                             
                            </div>
                        </div>
                        <!-- end widget -->
                        <!-- chart start -->
                       
                        
                       
                    </div>
</div>

@endsection