@extends('admin.admin_dashboard')

@section('admin')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">MANAGE SUBJECT COMBINATION</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Manage</a></li>
                        <li class="breadcrumb-item active">Combination</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

<div class="card">
<div class="card">
    <div class="card-body">

        <h4 class="card-title">View Subjects Combination Info</h4>


        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>#</th>
                <th>Class and Section</th>
                <th>Subject</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>


            <tbody>
                @foreach ($results as $key => $result)
            <tr>
                {{-- key+1 because arrays always start with zero --}}
                <td>{{ $key+1 }}</td>
                <td>{{ $result->class_name }} Section - {{ $result->section }}</td>
                <td>{{ $result->subject_name }}</td>
                <td>
                    {{-- condition for status --}}
                    @if($result->status==1)
                    <span class="badge bg-success">Active</span>

                    @else
                    <span class="badge bg-danger">In-active</span>
                    @endif
                </td>

                {{-- for styling the button --}}
                <td style="text-align: center;font-size: 20px">
                    @if ($result->status ==1)
                    {{-- for selecting single user --}}
                        <a href="{{ route('deactivate.subject.combination',$result->id) }}" style="color: #444; margin-right: 30px"><i class="fas fa-check"></i></a>
                    @else
                        <a href="{{ route('deactivate.subject.combination',$result->id) }}" style="color: #444; margin-right: 30px"><i class="fas fa-times"></i></a>
                    @endif
                </td>
            </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</div>


@endsection
