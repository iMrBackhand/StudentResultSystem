@extends('admin.admin_dashboard')

@section('admin')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Admin's Profile</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

<div class="card">
    <div class="card-body">

        <h4 class="card-title">ADMIN PROFILE - Update</h4>
                                                                                {{-- added this because of photo upload --}}
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" value="{{ $adminData->name }}">
            </div>
        </div>
        <!-- end row -->
        <div class="row mb-3">
            <label for="example-search-input" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" name="email" value="{{ $adminData->email }}">
            </div>
        </div>
        <!-- end row -->
        <div class="row mb-3">
            <label for="example-email-input" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="photo" id="Image">
            </div>
        </div>
        <!-- end row -->
        <div class="row mb-3">
            <label for="example-email-input" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                {{-- checking if no photo upload it upload a photo --}}
                <img id="ShowImage" src="{{ empty($adminData->photo)? asset('uploads/d.jpg') : asset('uploads/admin_profiles/'. $adminData->photo) }}" alt="avatar-4" class="rounded avatar-md">
            </div>
        </div>


        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
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
    <script>
        $(document).ready(function(){
            $('#Image').on('change', function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#ShowImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>

@endsection
