@extends('dashboard.layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Employés</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employés</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_employee"><i
                            class="fa fa-plus"></i> Ajouter un Employé</a>
                    <div class="view-icons">
                        <a href="employees" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                        <a href="employees_list" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.components.employee.filterEmployee')
        @include('dashboard.components.employee.grid-list-employee')
        @include('dashboard.components.employee.addEmployee')
        @include('dashboard.components.employee.deleteEmployee')

    @endsection()
