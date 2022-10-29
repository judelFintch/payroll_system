<div class="row staff-grid-row">
@if($employees->count()>0)
@foreach($employees as $employee)
    <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
        <div class="profile-widget">
            <div class="profile-img">
                <a href="{{ route('pages.employees.profil', ['id' =>$employee->id]) }}" class="avatar"><img
                        src="{{ $employee->images }}"
                        alt=""></a>
            </div>
            <div class="dropdown profile-action">
                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i
                            class="fa fa-pencil m-r-5"></i> Edit</a>
                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                        data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                </div>
            </div>
            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile">{{ $employee->firstname }}</a></h4>
            <div class="small text-muted">{{ $employee->departement }}</div>
        </div>
    </div>
    @endforeach
    @else

    @endif
</div>
    