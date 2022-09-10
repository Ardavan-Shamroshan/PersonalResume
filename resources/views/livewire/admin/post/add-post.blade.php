@push('head-tag')
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2> Posts</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.post') }}">Posts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>

        <div class="mb-2">
            <small class="text-muted">Add Post.</small>
            <a href="{{ route('admin.post') }}" class="btn btn-sm">
                <small class="card-description"> <i class="mdi mdi-arrow-left-circle-outline"></i> Back to all
                    Posts
                </small>
            </a>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" wire:submit.prevent="submit">
                            <div class="form-group" wire:ignore>
                                <label for="select2-dropdown">Author</label>
                                <select class="form-control" id="select2-dropdown">
                                    <option>مولف مورد نظر را انتخاب کنید</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" wire:ignore>
                                <label for="select2-dropdown-2">Category</label>
                                <select class="form-control" id="select2-dropdown-2">
                                    <option>دسته بندی مورد نظر را انتخاب کنید</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="title" name="post.title" wire:model.lazy="post.title">
                            </div>


                            {{-- <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea class="form-control" id="summary" placeholder="summary" name="post.summary" wire:model.lazy="post.summary" style="min-height: 7rem"></textarea>
                            </div> --}}

                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea dir="rtl" class="form-control" id="body" placeholder="body" name="post.body" wire:model.lazy="post.body" class="w-100" style="min-height: 15rem; line-height:1.2rem"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" placeholder="Image" name="postImage" wire:model.lazy="postImage">
                            </div>


                            <div class="form-check form-check-success col-4 mt-4">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" class="form-check-input" name="status" id="status" wire:model.lazy="post.status"> Activate <i class="input-helper"></i></label>
                            </div>


                            <div class="btn-group">
                                <button type="submit" class="btn btn-success @if ($errors->any()) disabled @endif"><i class="mdi mdi-content-save"></i>Save and back</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton3">
                                    <a class="dropdown-item @if ($errors->any()) disabled-link @endif" href="#" wire:click="saveAndEdit">Save and edit this item</a>
                                    <a class="dropdown-item @if ($errors->any()) disabled-link @endif" href="#" wire:click="saveAndNew">Save and new item</a>
                                </div>
                            </div>
                            <a type="button" class="btn btn-secondary me-2" wire:click="resetFilters"><i class="mdi mdi-cancel"></i>Cancel</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Validated Data</h4>
                        <p class="card-description"> you can preview your data validation here </p>
                        <form class="forms-sample">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" class="form-control border bg-dark @error('post.author_id') border-danger text-danger @else border-success text-success @enderror" value="@error('post.author_id') {{ $message }} @else {{ $post->author->fullname ?? '' }} @enderror" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" class="form-control border bg-dark @error('post.category_id') border-danger text-danger @else border-success text-success @enderror" value="@error('post.category_id') {{ $message }} @else {{ $post->category->title ?? '' }} @enderror" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" class="form-control border bg-dark @error('post.title') border-danger text-danger @else border-success text-success @enderror" value="@error('post.title') {{ $message }} @else {{ $post->title ?? '' }} @enderror" readonly>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <div class="col-12">
                                    <textarea type="text" class="form-control border bg-dark @error('post.summary') border-danger text-danger @else border-success text-success @enderror" readonly style="min-height: 7rem"> @error('post.summary') {{ $message }} @else {{ $post->summary ?? '' }} @enderror </textarea>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <div class="col-12">
                                    <textarea dir="rtl" class="form-control border bg-dark @error('post.body') border-danger text-danger @else border-success text-success @enderror" readonly style="min-height: 15rem; line-height:1.2rem"> @error('post.body') {{ $message }} @else {{ $post->body ?? '' }} @enderror </textarea>
                                </div>
                            </div>

                            <div class="form-group row position-relative ">
                                <div wire:loading wire:target="postImage" wire:key="postImage" class="position-absolute top-50" style="left:43%">
                                    <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                </div>
                                <div class="item">
                                    @if ($postImage)
                                        <img src="{{ $postImage->temporaryUrl() }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                    @else
                                        <img src="{{ asset('images/built-in/no-preview.png') }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12 mt-2">
                                    @if ($post->status ?? 0 == 1)
                                        <p class="text-success"><i class="mdi mdi-check"></i> is active</p>
                                    @else
                                        <p class="text-warning"><i class="mdi mdi-close"></i> is deactive</p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-check form-check-flat form-check-success">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" @if (!$errors->any()) checked @endif onclick="return false;"> Everything seems to be nice <i class="input-helper"></i></label>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- content-wrapper ends -->
</div>
@push('scripts')
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin-assets/vendors/select2/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#select2-dropdown').select2();
            $('#select2-dropdown').on('change', function(e) {
                var data = $('#select2-dropdown').select2("val");
                @this.set('post.author_id', data);
            });
        });

        $(document).ready(function() {
            $('#select2-dropdown-2').select2();
            $('#select2-dropdown-2').on('change', function(e) {
                var data = $('#select2-dropdown-2').select2("val");
                @this.set('post.category_id', data);
            });
        });
    </script>
@endpush
