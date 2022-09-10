<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <!-- ================================== Head Infos ================================== -->
        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Posts</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $posts->count() }}</h2>
                                </div>
                                <h6 class="text-muted font-weight-normal" dir="rtl"> {{ $latestPost->created_at->diffForHumans() }} <p>از آخرین مقاله </p>
                                </h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Category</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $categories->count() }}</h2>
                                </div>
                                <h6 class="text-muted font-weight-normal" dir="rtl"> {{ $latestCategory->created_at->diffForHumans() }} <p>از آخرین دسته بندی </p>
                                </h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Project</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">{{ $projects->count() }}</h2>
                                </div>
                                <h6 class="text-muted font-weight-normal" dir="rtl"> {{ $latestProject->created_at->diffForHumans() }} <p>از آخرین پروژه </p>
                                </h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================== End Head Infos ================================== -->



        <!-- ================================== Details of skills ================================== -->
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <h4 class="card-title">Skills Progress</h4>

                        @foreach ($skills as $skill)
                            <div class="d-flex justify-content-between">
                                <div class="p-1">
                                    <small class="p-1 bg bg-dark p-1 rounded shadow-sm">{{ $skill->title }}</small>
                                </div>
                                <div class="progress my-2 w-50">
                                    <div class="progress-bar {{ $skill->progressBarBG }}" role="progressbar" style="width: {{ $skill->level }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        {{ $skill->level }}%
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title mb-1">Open Projects</h4>
                            <p class="text-muted mb-1">نمونه کار و پروژه ها</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list">


                                    @if ($projects[0])
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-primary">
                                                    <i class="mdi mdi-file-document"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">{{ $projects[0]->title }}</h6>
                                                    <a href="{{ $projects[0]->link }}" class="text-muted mb-0">{{ $projects[0]->link }}</a>
                                                </div>
                                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">{{ $projects[0]->created_at->diffForHumans() }}</p>
                                                    <p class="text-muted mb-0">{{ $projects[0]->projectStatus }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (array_key_exists(1, $projects->toArray()))
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-success">
                                                    <i class="mdi mdi-cloud-download"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">{{ $projects[1]->title }}</h6>
                                                    <a href="{{ $projects[1]->link }}" class="text-muted mb-0">{{ $projects[1]->link }}</a>
                                                </div>
                                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">{{ $projects[1]->created_at->diffForHumans() }}</p>
                                                    <p class="text-muted mb-0">{{ $projects[1]->projectStatus }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (array_key_exists(2, $projects->toArray()))
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-info">
                                                    <i class="mdi mdi-clock"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">{{ $projects[2]->title }}</h6>
                                                    <a href="{{ $projects[2]->link }}" class="text-muted mb-0">{{ $projects[2]->link }}</a>
                                                </div>
                                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">{{ $projects[2]->created_at->diffForHumans() }}</p>
                                                    <p class="text-muted mb-0">{{ $projects[2]->projectStatus }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                    @if (array_key_exists(3, $projects->toArray()))
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-danger">
                                                    <i class="mdi mdi-email-open"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">{{ $projects[3]->title }}</h6>
                                                    <a href="{{ $projects[3]->link }}" class="text-muted mb-0">{{ $projects[3]->link }}</a>
                                                </div>
                                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">{{ $projects[3]->created_at->diffForHumans() }}</p>
                                                    <p class="text-muted mb-0">{{ $projects[3]->projectStatus }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (array_key_exists(4, $projects->toArray()))
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-warning">
                                                    <i class="mdi mdi-chart-pie"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">{{ $projects[4]->title }}</h6>
                                                    <a href="{{ $projects[4]->link }}" class="text-muted mb-0">{{ $projects[4]->link }}</a>
                                                </div>
                                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="text-muted">{{ $projects[4]->created_at->diffForHumans() }}</p>
                                                    <p class="text-muted mb-0">{{ $projects[4]->projectStatus }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================== End Details of skills ================================== -->


        <!-- ================================== Sub Head Infos ================================== -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $latestPost->likes ?? 0 }}</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">علاقه کاربران به آخرین مقاله</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $authors->count() }}</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium"> مولف</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">{{ $latestAuthor->fullname }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $experiences->count() }}</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">تجربه های مولف</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">{{ $latestExperience->author->fullname }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">

                                    <h3 class="mb-0" id="skills_label">{{ $skills->count() }}</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">مهارت های مولف</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">{{ $latestSkill->author->fullname }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================== End Sub Head Infos ================================== -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{ $setting->copy_right}}</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
