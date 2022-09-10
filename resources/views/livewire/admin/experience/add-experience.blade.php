@push('head-tag')
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endpush

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2> Experiences</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.experience') }}">Experiences</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>

        <div class="mb-2">
            <small class="text-muted">Add Experience.</small>
            <a href="{{ route('admin.experience') }}" class="btn btn-sm">
                <small class="card-description"> <i class="mdi mdi-arrow-left-circle-outline"></i> Back to all
                    Experiences
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
                                <label for="title">Title</label>
                                <select class="form-control" id="select2-dropdown">
                                    <option>مولف مورد نظر را انتخاب کنید</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="title" name="experience.title" wire:model.lazy="experience.title">
                            </div>
<div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="description" name="experience.description" wire:model.lazy="experience.description">
                            </div>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" placeholder="example: آذر 1400" name="experience.date" wire:model.lazy="experience.date">
                            </div>


                            <div class="form-check form-check-success col-4 mt-4">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" class="form-check-input" name="status" id="status" wire:model.lazy="experience.status"> Activate <i class="input-helper"></i></label>
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
                                    <input type="text" class="form-control border bg-dark @error('experience.author_id') border-danger text-danger @else border-success text-success @enderror" value="@error('experience.author_id') {{ $message }} @else {{ $experience->author->fullname ?? '' }} @enderror"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
<div class="col-12">
                                    <input type="text" class="form-control border bg-dark @error('experience.title') border-danger text-danger @else border-success text-success @enderror" value="@error('experience.title') {{ $message }} @else {{ $experience->title ?? '' }} @enderror"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
<div class="col-12">
                                    <input type="text" class="form-control border bg-dark @error('experience.description') border-danger text-danger @else border-success text-success @enderror" value="@error('experience.description') {{ $message }} @else {{ $experience->description ?? '' }} @enderror"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" class="form-control border bg-dark @error('experience.date') border-danger text-danger @else border-success text-success @enderror" value="@error('experience.date') {{ $message }} @else {{ $experience->date ?? '' }} @enderror"
                                        readonly>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12 mt-2">
                                    @if ($experience->status ?? 0 == 1)
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
                @this.set('experience.author_id', data);
            });
        });
    </script>
@endpush
