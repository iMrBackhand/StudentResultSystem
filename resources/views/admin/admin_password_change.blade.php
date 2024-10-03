@extends('admin.admin_dashboard')

@section('admin')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">ADMIN PASSWORD CHANGE</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Password</a></li>
                        <li class="breadcrumb-item active">Change</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

<div class="card">
    <div class="card-body">

        <h4 class="card-title">ADMIN PASSWORD - Update</h4>
        <form action="{{ route('admin.password.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
            <div class="col-sm-10">
                <input class="form-control @error('old_password') is-invalid

                @enderror" type="password" name="old_password" placeholder="Old Password">
                @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-10">
                <input class="form-control @error('old_password') is-invalid

                @enderror" type="password" name="new_password" placeholder="New Password">
                @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm New Password</label>
            <div class="col-sm-10">
                <input class="form-control" type="password" name="new_password_confirmation" placeholder="Confirm New Password">

            </div>
        </div>
        <!-- end row -->
        <button type="submit" class="btn btn-primary waves-effect waves-light">Change Password</button>
        </form>
    </div>

</div>

</div>
    {{-- for checking if the script is working --}}
    {{-- <script>
        $(document).ready(function(){
            alert('Working')
        })
    </script> --}}

    {{-- this is for uploading image --}}


@endsection
