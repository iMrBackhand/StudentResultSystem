@extends('admin.admin_dashboard')

@section('admin')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">MANAGE ACCOUNT</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Manage</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

<div class="card">
<div class="card">
    <div class="card-body">

        <h4 class="card-title">View User Register</h4>


        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
                @foreach ($users as $key => $user)
            <tr>
                {{-- key+1 because arrays always start with zero --}}
                <td>{{ $key+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                {{-- for styling the button --}}
                <td style="text-align: center; font-size: 20px;">
                    {{-- for selecting single user --}}
                    <a href="{{ route('edit.class', $user->id) }}" style="color: #444; margin-right: 30px;" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('delete.class', $user->id) }}" id="delete" style="color: red;" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>

            </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
