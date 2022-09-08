<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1> Experiences </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Experiences</li>
                </ol>
            </nav>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div><small class="text-muted py-3">Showing {{ $experiences->count() }} entries.</div>
                        <a href="{{ route('admin.experience.add-experience') }}"
                            class="card-title btn btn-info btn-icon-text my-2 py-2"> Add Experience <i
                                class="mdi mdi-plus"></i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Experience </th>
                                        <th> Author </th>
                                        {{-- <th> Description </th> --}}
                                        <th> Date </th>
                                        <th> Status </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($experiences as $experience)
                                    <tr>
                                        <td>
                                            <p class="text-primary"> {{ $experience->title }}</p>
                                            <small>{{ $experience->description }}</small>
                                        </td>
                                        <td>{{ $experience->author->fullname }}</td>

                                        <td>{{ $experience->date }}</td>
                                        <td>
                                            <label
                                                class="badge {{ $experience->status == 0 ? 'badge-danger' : 'badge-success', }}">{{
                                                $experience->experienceStatus }}</label>
                                            <button type="button" class="btn btn-sm text-warning border-0"
                                                wire:click.prevent="changeStatus({{ $experience }})"><i
                                                    class="mdi mdi-reload btn-icon-prepend"></i></button>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.experience.edit-experience', $experience) }}" class="btn btn-sm btn-icon-text my-auto"> <small>edit <i
                                                        class="mdi mdi-pen"></i></small></a>
                                            <a class="btn btn-sm btn-icon-text my-auto"
                                                wire:click.prevent="destroy({{ $experience }})"> <small>delete <i
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
