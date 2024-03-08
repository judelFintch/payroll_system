@extends('dashboard.layouts.app')
@section('title', 'Welcome')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Bienvenu {{ Auth::user()->name }} </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                <a href="{{route('pages.organisation.index')}}">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                        <div class="dash-widget-info">
                            <h3>{{ $organisations->count() }}</h3>
                            <span>Entreprises</span>
                        </div>  
                    </div>
                </a>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                <a href="{{route('pages.departement.index')}}">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                        <div class="dash-widget-info">
                            <h3>{{ $departements->count() }}</h3>
                            <span>Departements</span>
                        </div>  
                    </div>
                </a>
                </div>
            </div>
        

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                        <div class="dash-widget-info">
                            <h3>0</h3>
                            <span>Total Depense</span>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <a href="{{route('pages.employees.all')}}">
                <div class="card dash-widget">
                    <div class="card-body">
                        <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                        <div class="dash-widget-info">
                            <h3>{{ $employees->count() }}</h3>
                            <span>Employés</span>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</div>
@endsection
