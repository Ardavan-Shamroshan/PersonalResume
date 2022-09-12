<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1> Categories </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </nav>
        </div>

        <!-- table -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div><small class="text-muted py-3">Showing {{ $setting != null ? $setting->count() : 0 }} entries.</div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Logo </th>
                                        <th> Title </th>
                                        <th> Copyright </th>
                                        <th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if ($setting)
                                            @if ($editedSettingIndex == $setting->id)
                                                <td style="width: 8rem;">
                                                    <label for="logo">

                                                        <input type="file" class="form-control d-none" id="logo" placeholder="logo" name="settingLogo" wire:model.lazy="settingLogo">
                                                        @if (!$settingLogo && $setting->logo)
                                                            <img src="{{ $setting->logo == 'logo.png' ? asset('images/built-in/no-preview.png') : asset($setting->logo) }}" class="rounded border p-1 w-100" alt="preview.png" style="height:100px">
                                                        @elseif($settingLogo)
                                                            <img src="{{ $settingLogo->temporaryUrl() }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                                        @else
                                                            <img src="{{ asset('images/built-in/no-preview.png') }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                                        @endif
                                                    </label>

                                                </td>
                                                <td>
                                                    <input type="text" class="form-control @error('setting.title') border-danger text-danger @else border-success text-success @enderror" wire:model.lazy="setting.title">
                                                </td>
                                                <td>

                                                    <input type="text" class="form-control @error('setting.copy_right') border-danger text-danger @else border-success text-success @enderror" wire:model.lazy="setting.copy_right">
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-icon-text my-auto @if ($errors->any()) disabled-link @endif" wire:loading.class="disabled-link" wire:click="submit"> <small>Save <i class="mdi mdi-content-save"></i></small></a>
                                                </td>
                                            @else
                                                <td style="width: 19%;">
                                                    @if (!$settingLogo && $setting->logo)
                                                        <img src="{{ $setting->logo == 'logo.png' ? asset('images/built-in/no-preview.png') : asset($setting->logo) }}" class="rounded border p-1 w-100" alt="preview.png" style="height:100px">
                                                    @elseif($settingLogo)
                                                        <img src="{{ $settingLogo->temporaryUrl() }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                                    @else
                                                        <img src="{{ asset('images/built-in/no-preview.png') }}" class="rounded border p-1 w-100" alt="preview.png" height="200">
                                                    @endif
                                                </td>
                                                <td class="w-25" style="white-space: normal;">{{ $setting->title }}</td>
                                                <td style="white-space: normal;">{{ $setting->copy_right }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-icon-text my-auto" wire:click="editSetting({{ $setting->id }})"> <small>edit <i class="mdi mdi-pen"></i></small></a>
                                                </td>

                                            @endif
                                    </tr>
                                    @endif

                                </tbody>
                            </table>

                        </div>


                        @if ($errors->any())
                            <div class="alert" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
