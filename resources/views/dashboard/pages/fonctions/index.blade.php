@extends('dashboard.layouts.app')
@section('title', 'Fonctions')
@section('content')
<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Fonctions(Categorie Agents)</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Categorie</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_designation"><i
                            class="fa fa-plus"></i> Ajouter une Categorie Employee</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                           
                            <tr>
                                <th style="width: 30px;">#</th>
                                <th>Designation </th>
                                <th>Department </th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($fonctions as $fonction)
                            <tr>
                                <td>1</td>
                                <td>{{$fonction->fonction}}</td>
                                <td>{{$fonction->departement}}</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id="add_designation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter une Fonction</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('pages.fonction.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Designation Name <span class="text-danger">*</span></label>
                            <input class="form-control" name="fonction" type="text">
                        </div>
                        <div class="form-group">
                            <label>Department <span class="text-danger">*</span></label>
                            <select name="departement" class="select">
                                <option>Select Department</option>
                                <option>Web Development</option>
                                <option>IT Management</option>
                                <option> Marketing</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="edit_designation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Designation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Designation Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="Web Developer" type="text">
                        </div>
                        <div class="form-group">
                            <label>Department <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Department</option>
                                <option>Web Development</option>
                                <option>IT Management</option>
                                <option>Marketing</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="delete_designation" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Designation</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
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
