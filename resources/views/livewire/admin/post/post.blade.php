<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1> Posts </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
                </ol>
            </nav>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div><small class="text-muted py-3">Showing {{ $posts->count() }} entries.</div>
                        <a href="{{ route('admin.post.add-post') }}"
                            class="card-title btn btn-info btn-icon-text my-2 py-2"> Add Post <i
                                class="mdi mdi-plus"></i></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Post </th>
                                        <th> Title </th>
                                        <th> Author </th>
                                        <th> Category </th>
                                        <th> Status </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td> <img src="{{ asset($post->image) }}" alt="" class="img-fluid border rounded" style="width: 6rem; height: inherit; border-radius: inherit;"></td>
                                        <td style="white-space: normal;">{{ $post->title }}</td>
                                        <td>{{ $post->author->fullname }}</td>
                                        <td>{{ $post->category->title }}</td>
                                        <td>
                                            <label
                                                class="badge {{ $post->status == 0 ? 'badge-danger' : 'badge-success', }}">{{
                                                $post->postStatus }}</label>
                                            <button type="button" class="btn btn-sm text-warning border-0"
                                                wire:click.prevent="changeStatus({{ $post }})"><i
                                                    class="mdi mdi-reload btn-icon-prepend"></i></button>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.post.edit-post', $post) }}" class="btn btn-sm btn-icon-text my-auto"> <small>edit <i
                                                        class="mdi mdi-pen"></i></small></a>
                                            <a class="btn btn-sm btn-icon-text my-auto"
                                                wire:click.prevent="destroy({{ $post }})"> <small>delete <i
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
