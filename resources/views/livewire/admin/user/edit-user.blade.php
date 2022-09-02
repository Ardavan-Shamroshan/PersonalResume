<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2> Users</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.user') }}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>

        <div class="mb-2">
            <small class="text-muted">Edit User.</small>
            <a href="{{ route('admin.user') }}" class="btn btn-sm">
                <small class="card-description"> <i class="mdi mdi-arrow-left-circle-outline"></i> Back to all Users
                </small>
            </a>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" wire:submit.prevent="edit">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="name" name="name" wire:model.lazy="user.name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                    wire:model.lazy="user.email">
                            </div>

                            <div class="btn-group">
                                <button type="submit" class="btn btn-success @if ($errors->any()) disabled @endif"><i
                                        class="mdi mdi-content-save"></i>Save and back</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                    id="dropdownMenuSplitButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton3">
                                    <a class="dropdown-item @if ($errors->any()) disabled-link @endif"
                                       href="#" wire:click="SaveAndEdit">Save and edit this item</a>
                                    <a class="dropdown-item @if ($errors->any()) disabled-link @endif"
                                       href="#" wire:click="SaveAndNew">Save and new item</a>
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
                                <div class="col-sm-12">
                                    <input type="text"
                                        class="form-control border bg-dark @error('user.name') border-danger text-danger @else border-success text-success @enderror"
                                        value="@error('user.name') {{ $message }} @else {{ $user->name ?? '' }} @enderror"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="email"
                                        class="form-control border bg-dark @error('user.email') border-danger text-danger @else  border-success text-success @enderror"
                                        value="@error('user.email') {{ $message }} @else {{ $user->email ?? '' }} @enderror"
                                        readonly>
                                </div>
                            </div>

                            <div class="form-check form-check-flat form-check-success">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" @if (!$errors->any()) checked @endif
                                    onclick="return false;"> Everything seems to be nice <i
                                        class="input-helper"></i></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
