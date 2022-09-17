<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2> Skills</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.skill') }}">Skills</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

        <div class="mb-2">
            <small class="text-muted">Edit Skill.</small>
            <a href="{{ route('admin.skill') }}" class="btn btn-sm">
                <small class="card-description"> <i class="mdi mdi-arrow-left-circle-outline"></i> Back to all
                    Skills
                </small>
            </a>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" wire:submit.prevent="submit">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="title" name="skill.title" wire:model.lazy="skill.title">
                            </div>

                            {{-- <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea class="form-control" id="summary" placeholder="summary" name="skill.summary" wire:model.lazy="skill.summary" style="min-height: 7rem"></textarea>
                            </div> --}}

                            <div class="form-group col-md-4">
                                <input type="range" name="rangeInput" min="0" max="100" id="skill_level" placeholder="Level" name="skill_level" wire:model.lazy="skill.level" onchange="updateTextInput(this.value);">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" placeholder="Image" name="skillImage" wire:model.lazy="skillImage">
                            </div>

                            <div class="form-check form-check-success col-4 mt-4">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" class="form-check-input" name="status" id="status" wire:model.lazy="skill.status"> Activate
                                    <i class="input-helper"></i></label>
                            </div>

                            <div class="btn-group">
                                <button type="submit" class="btn btn-success @if ($errors->any()) disabled @endif">
                                    <i class="mdi mdi-content-save"></i>Save and back
                                </button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton3">
                                    <a class="dropdown-item @if ($errors->any()) disabled-link @endif" href="#" wire:click="saveAndEdit">Save and edit this item</a>
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
                                    <input type="text" class="form-control border bg-dark @error('skill.title') border-danger text-danger @else border-success text-success @enderror" value="@error('skill.title') {{ $message }} @else {{ $skill->title ?? '' }} @enderror" readonly>
                                </div>
                            </div>

                            <div class=" form-group col-md-12">
                                <input type="text" class="form-control border bg-dark @error('skill.level') border-danger text-danger @else border-success text-success @enderror" value={{ $skill->level ?? '' }}>
                            </div>

                            <div class="form-group row position-relative ">
                                <div wire:loading wire:target="skillImage" wire:key="skillImage" class="position-absolute top-50" style="left:43%">
                                    <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                </div>
                                <div class="item">
                                    @if (!$skillImage && $skill->image)
                                        <img src="{{ asset($skill->image) }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                    @elseif($skillImage)

                                        <img src="{{ $skillImage->temporaryUrl() }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                    @else
                                        <img src="{{ asset('images/built-in/no-preview.png') }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                    @endif
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                @if ($skill->status ?? 0 == 1)
                                    <p class="text-success"><i class="mdi mdi-check"></i> is active</p>
                                @else
                                    <p class="text-warning"><i class="mdi mdi-close"></i> is deactive</p>
                                @endif
                            </div>
                            <div class="form-check form-check-flat form-check-success">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" @if (!$errors->any()) checked @endif onclick="return false;"> Everything seems to be nice
                                    <i class="input-helper"></i></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- content-wrapper ends --></div>
