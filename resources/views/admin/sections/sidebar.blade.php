<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        @php
            $adminData = App\Models\User::findOrFail(Auth::user()->id);
        @endphp
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ empty($adminData->photo)? asset('uploads/d.jpg') : asset('uploads/admin_profiles/'. $adminData->photo) }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $adminData->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> {{ $adminData->email }}</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">MAIN CATEGORY</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="fas fa-home"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>



                <li class="menu-title">APPERANCE</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-edit"></i>
                        <span>Student Classes</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('create.class') }}">Create Class</a></li>
                        <li><a href="{{ route('manage.classes') }}">Manage Classes</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-book"></i>
                        <span>Subjects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('create.subject') }}">Create Subject</a></li>
                        <li><a href="{{ route('manage.subject') }}">Manage Subject</a></li>
                        <li><a href="{{ route('add.subject.combination') }}">Add Subject Combination</a></li>
                        <li><a href="{{ route('manage.subject.combination') }}">Manage Subject Combination</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-edit"></i>
                        <span>Student </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.student') }}">Add Student</a></li>
                        <li><a href="{{ route('manage.students') }}">Manage Students</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
