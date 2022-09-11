<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1> Author </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Author</li>
                </ol>
            </nav>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div><small class="text-muted py-3">Showing {{ $authors->count() }} entries.</div>
                        <a href="{{ route('admin.author.add-author') }}"
                            class="card-title btn btn-info btn-icon-text my-2 py-2"> Add Author <i
                                class="mdi mdi-plus"></i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Author </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Title </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($authors as $author)
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{ $author->photo === null ? asset('admin-assets/images/faces-clipart/pic-1.png') : asset($author->photo) }}" alt="image">
                                        </td>
                                        <td>{{ $author->fullname }}</td>
                                        <td><a href="mailto:{{ $author->email }}" class="btn btn-sm">{{ $author->email }}</a></td>
                                        <td>{{ $author->title }} </td>
                                        <td>
                                            <a href="{{ route('admin.author.edit-author', $author) }}"
                                                class="btn btn-sm btn-icon-text my-auto"> <small>edit <i class="mdi mdi-pen"></i></small></a>
                                            <a class="btn btn-sm btn-icon-text my-auto" wire:click.prevent="destroy({{ $author }})"> <small>delete <i class="mdi mdi-trash-can"></i></small></a>
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
