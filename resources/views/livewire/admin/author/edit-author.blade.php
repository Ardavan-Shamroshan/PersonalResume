<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2> Authors</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.author') }}">Authors</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

        <div class="mb-2">
            <small class="text-muted">Edit Author.</small>
            <a href="{{ route('admin.author') }}" class="btn btn-sm">
                <small class="card-description"> <i class="mdi mdi-arrow-left-circle-outline"></i> Back to all Authors
                </small>
            </a>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" wire:submit.prevent="edit">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="first_name">First name</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="first name" name="first_name" wire:model.lazy="author.first_name">
                                </div>
                                <div class="form-group col-6">
                                    <label for="last_name">Last name</label>
                                    <input type="text" class="form-control" id="last_name" placeholder="last name" name="last_name" wire:model.lazy="author.last_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" wire:model.lazy="author.email">
                            </div>
                            <div class="form-group col-12">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" wire:model.lazy="author.title">
                            </div>

                            <div class="row">
                                <div class="form-group col-8">
                                    <label for="mobile">Mobile</label>
                                    <input type="number" class="form-control" id="mobile" placeholder="Mobile" name="mobile" wire:model.lazy="author.mobile">
                                </div>

                                <div class="form-group col-4">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="City" name="city" wire:model.lazy="author.city">
                                </div>
                            </div>

                            <div class="form-group col-12">
                                <label for="study">Study</label>
                                <input type="text" class="form-control" id="study" placeholder="Study" name="study" wire:model.lazy="author.study">
                            </div>

                            <div class="row">
                                <div class="form-group col-8">
                                    <label for="birth_date">Birth date</label>
                                    <input type="text" class="form-control" id="birth_date" placeholder="Birth date" name="birth_date" wire:model.lazy="author.birth_date">
                                </div>

                                <div class="form-check form-check-success col-4 mt-4">
                                    <label class="form-check-label" for="status">
                                        <input type="checkbox" class="form-check-input" name="status" id="status" wire:model.lazy="author.status"> Activate <i class="input-helper"></i></label>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <label for="skill">Skills</label>

                                    <div class="form-group col-6">
                                        <input type="text" class="form-control" id="skill_title" placeholder="Title" wire:model.lazy="skill.title.0">
                                    </div>
                                    <div class="form-check form-check-success col-3">
                                        <label class="form-check-label" for="skill_status">
                                            <input type="checkbox" class="form-check-input" name="skill_status" id="skill_status" wire:model.lazy="skill.status.0"> Activate <i class="input-helper"></i></label>
                                    </div>
                                    <div class="form-group col-3">
                                        <a wire:click.prevent="add({{ $i }})" class="card-title btn btn-sm btn-info btn-icon-text"><small> Add Skill <i class="mdi mdi-plus"></i></small></a>
                                    </div>

                                    <div class="form-group col-12">
                                        <input type="range" name="rangeInput" min="0" max="100" id="skill_level" placeholder="Level" name="skill_level" wire:model.lazy="skill.level.0" onchange="updateTextInput(this.value);">
                                    </div>
                            </div>

                            @foreach ($inputs as $key => $value)
                            <div class="row">
                                    <label for="skill_title_{{ $key }}">Skills</label>
                                    <div class="form-group col-6">
                                        <input type="text" class="form-control" id="skill_title_{{ $key }}" placeholder="Title" name="skill_title" wire:model.lazy="skill.title.{{ $value }}">
                                    </div>
                                    <div class="form-check form-check-success col-3">
                                        <label class="form-check-label" for="skill_status_{{ $key }}">
                                            <input type="checkbox" class="form-check-input" name="skill_status" id="skill_status_{{ $key }}" wire:model.lazy="skill.status.{{ $value }}"> Activate <i class="input-helper"></i></label>
                                    </div>

                                    <div class="col-1">
                                        <div class="form-group">
                                            <a wire:click.prevent="add({{ $i }})" class="card-title btn btn-sm btn-info btn-icon-text"><small><i class="mdi mdi-plus"></i></small></a>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-group">
                                            <a wire:click.prevent="remove({{ $i }})" class="card-title btn btn-sm btn-danger btn-icon-text"><small> <i class="mdi mdi-minus"></i></small></a>
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <input type="range" name="rangeInput" min="0" max="100" id="skill_level_{{ $key }}" placeholder="Level" name="skill_level" wire:model.lazy="skill.level.{{ $value }}" onchange="updateTextInput(this.value);">
                                    </div>
                                </div>
                            @endforeach

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
                            <div class="row form-group">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control border bg-dark @error('author.first_name') border-danger text-danger @else border-success text-success @enderror" value="@error('author.first_name') {{ $message }} @else {{ $author->first_name ?? '' }} @enderror"
                                        readonly>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control border bg-dark @error('author.last_name') border-danger text-danger @else border-success text-success @enderror" value="@error('author.last_name') {{ $message }} @else {{ $author->last_name ?? '' }} @enderror"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control border bg-dark @error('author.email') border-danger text-danger @else  border-success text-success @enderror" value="@error('author.email') {{ $message }} @else {{ $author->email ?? '' }} @enderror" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control border bg-dark @error('author.title') border-danger text-danger @else border-success text-success @enderror" value="@error('author.title') {{ $message }} @else {{ $author->title ?? '' }} @enderror" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control border bg-dark @error('author.mobile') border-danger text-danger @else border-success text-success @enderror" value="@error('author.mobile') {{ $message }} @else {{ $author->mobile ?? '' }} @enderror" readonly>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control border bg-dark @error('author.city') border-danger text-danger @else border-success text-success @enderror" value="@error('author.city') {{ $message }} @else {{ $author->city ?? '' }} @enderror" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control border bg-dark @error('author.study') border-danger text-danger @else border-success text-success @enderror" value="@error('author.study') {{ $message }} @else {{ $author->study ?? '' }} @enderror" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control border bg-dark @error('author.birth_date') border-danger text-danger @else border-success text-success @enderror"
                                        value="@error('author.birth_date') {{ $message }} @else {{ $author->birth_date ?? '' }} @enderror" readonly>
                                </div>
                                <div class="col-sm-4 mt-2">
                                    @if ($author->status ?? 0 == 1)
                                        <p class="text-success"><i class="mdi mdi-check"></i> is active</p>
                                    @else
                                        <p class="text-warning"><i class="mdi mdi-close"></i> is deactive</p>
                                    @endif
                                </div>
                            </div>

                            <hr>
                            <h4>Skills</h4>

                            <div class="form-group row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control border bg-dark @error('skill.title.0') border-danger text-danger @else border-success text-success @enderror" value="@error('skill.title.0') {{ $message }} @else {{ $skill->title[0] ?? '' }} @enderror"
                                        readonly>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border bg-dark" value={{ $skill->level[0] ?? '' }}>
                                </div>
                                <div class="col-4 mt-2">
                                    @if ($skill->status[0] ?? 0 == 1)
                                        <p class="text-success"><i class="mdi mdi-check"></i> is active</p>
                                    @else
                                        <p class="text-warning"><i class="mdi mdi-close"></i> is deactive</p>
                                    @endif
                                </div>
                            </div>

                            @foreach ($inputs as $key => $value)
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control border bg-dark @error('skill.title.0') border-danger text-danger @else border-success text-success @enderror" value="@error('skill.title.0') {{ $message }} @else {{ $skill->title[$value] ?? '' }} @enderror" readonly>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border bg-dark" value={{ $skill->level[$value] ?? '' }}>
                                </div>
                                <div class="col-4 mt-2">
                                    @if ($skill->status[$value] ?? 0 == 1)
                                        <p class="text-success"><i class="mdi mdi-check"></i> is active</p>
                                    @else
                                        <p class="text-warning"><i class="mdi mdi-close"></i> is deactive</p>
                                    @endif
                                </div>
                            </div>
                            @endforeach

                            @foreach ($skills as $skill)
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control border bg-dark @error('skill.title.0') border-danger text-danger @else border-success text-success @enderror" value="@error('skill.title.0') {{ $message }} @else {{ $skill->title }} @enderror"
                                        readonly>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control border bg-dark" value={{ $skill->level }} readonly>
                                </div>
                                <div class="col-1 mt-2">
                                    @if ($skill->status == 1)
                                        <p class="text-success"><i class="mdi mdi-check"></i></p>
                                    @else
                                        <p class="text-warning"><i class="mdi mdi-close"></i></p>
                                    @endif
                                </div>
                                <div class="col-2">
                                    <a href="" class="btn btn-sm text-danger mt-2" wire:click.prevent="destroy({{ $skill }})"><i class="mdi mdi-trash-can-outline"></i></a>
                                </div>

                            </div>
                            @endforeach





                            <div class="form-check form-check-flat form-check-success">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" @if (!$errors->any()) checked @endif onclick="return false;"> Everything seems to be nice <i class="input-helper"></i></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
