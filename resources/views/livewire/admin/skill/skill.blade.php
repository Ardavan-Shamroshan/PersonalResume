<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1> Skills </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Skills</li>
                </ol>
            </nav>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div><small class="text-muted py-3">Showing {{ $skills->count() }} entries.</div>
                        {{-- <a href="{{ route('admin.skill.add-skill') }}"
                            class="card-title btn btn-info btn-icon-text my-2 py-2"> Add Skill <i
                                class="mdi mdi-plus"></i></a> --}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Skill </th>
                                        <th> Author </th>
                                        <th> Progress </th>
                                        <th> Category </th>
                                        <th> Status </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($skills as $skill)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $skill->title }}</td>
                                        <td>{{ $skill->author->fullname }}</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar {{ $skill->progressBarBG }}" role="progressbar"
                                                    style="width: {{ $skill->level }}%" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"> {{ $skill->level }}</div>
                                            </div>
                                        </td>
                                        <td>{{ $skill->category ?? '-' }}</td>
                                        <td>
                                            <label
                                                class="badge {{ $skill->status == 0 ? 'badge-danger' : 'badge-success', }}">{{
                                                $skill->skillStatus }}</label>
                                            <button type="button" class="btn btn-sm text-warning border-0"
                                                wire:click.prevent="changeStatus({{ $skill }})"><i
                                                    class="mdi mdi-reload btn-icon-prepend"></i></button>
                                        </td>

                                        <td>
                                            {{-- <a href="{{ route('admin.skill.edit-skill', $skill) }}"
                                                class="btn btn-sm btn-icon-text my-auto"> <small>edit <i
                                                        class="mdi mdi-pen"></i></small></a> --}}
                                            <a class="btn btn-sm btn-icon-text my-auto"
                                                wire:click.prevent="destroy({{ $skill }})"> <small>delete <i
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
