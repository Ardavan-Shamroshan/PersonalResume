<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1> Users </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div><small class="text-muted py-3">Showing {{ $users->count() }} entries.</div>
                        <a href="{{ route('admin.user.add-user') }}"
                            class="card-title btn btn-info btn-icon-text my-2 py-2"> Add User <i
                                class="mdi mdi-plus"></i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> User </th>
                                        <th> Email </th>
                                        <th> Verified At </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>

                                        <td><a href="mailto:{{ $user->email }}" class="btn btn-sm">{{ $user->email }}
                                            </a></td>
                                        <td>
                                            @if (empty($user->email_verified_at))
                                            <a href="{{ route('login') }}" class="btn btn-sm">verify</a>
                                            @else
                                            {{ $user->email_verified_at }}
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('admin.user.edit-user', $user) }}"
                                                class="btn btn-sm btn-icon-text my-auto"> <small>edit <i
                                                        class="mdi mdi-pen"></i></small></a>
                                            <a class="btn btn-sm btn-icon-text my-auto"
                                                wire:click.prevent="destroy({{ $user }})"> <small>delete <i
                                                        class="mdi mdi-trash-can"></i></small></a>
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
