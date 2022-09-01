<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1> Users </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.user') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div><small class="text-muted py-3">Showing 1 to 10 of 132 entries. <a href="" class="btn btn-sm">Reset</a></small></div>
                        <button type="button" class="card-title btn btn-info btn-icon-text my-2 py-2" > Add User <i class="mdi mdi-plus"></i></button>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> User </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Verified At </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($users as $user)
                                  <tr>
                                    <td class="py-1">
                                        <img src="{{  asset('admin-assets/images/faces-clipart/pic-1.png') }}" alt="image">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    {{-- <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </td> --}}
                                    <td><a href="mailto:{{ $user->email }}" class="btn btn-sm">{{  $user->email }} </a></td>
                                    <td> {{  $user->email_verified_at }} </td>
                                    <td>
                                        <a type="button" class="btn btn-sm btn-icon-text my-auto"> <small>edit <i class="mdi mdi-pen"></i></small></a>
                                        <a type="button" class="btn btn-sm btn-icon-text my-auto"> <small>delete <i class="mdi mdi-trash-can"></i></small></a>
                                    </td>
                                </tr>
                                  @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
