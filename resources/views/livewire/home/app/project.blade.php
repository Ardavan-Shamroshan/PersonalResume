<section id="work ">
    <div class="portfolio-container">
        <!-- Main Heading Starts -->
        <div class="container text-center page-title">
            <h2 class="text-center"> نمونه کارهای <span> من </span></h2>
            <span class="title-head-subtitle">طراحی خوب بیش از آنکه هزینه به بار بیاره، ارزش‌آفرینی می‌کنه.

            </span>
        </div>
        <!-- Main Heading Ends -->
        <div class="portfolio-section">
            <div class="container cd-container">
                <div>
                    <!-- Portfolio Items Starts -->
                    <ul class="row" id="portfolio-items">
                        @foreach ($projects as $project)
                            <!-- Portfolio Item Starts -->
                            <li class="col-12 col-md-6 col-lg-4 ">
                                <a href="#0" data-type="project-{{ $project->id }}" class="border shadow-sm">
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid">
                                    <div><span>{{ $project->title }}</span>
                                    </div>
                                </a>
                            </li>
                            <!-- Portfolio Item Ends -->
                        @endforeach
                    </ul>
                    <!-- Portfolio Items Ends -->
                </div>
            </div>
        </div>
        <!-- PORTFOLIO OVERLAY STARTS -->
        <div class="portfolio-overlay"></div>
        <!-- PORTFOLIO OVERLAY ENDS -->
    </div>

    @foreach ($projects as $project)
        <!-- Portfolio Project Content Starts -->
        <div class="project-info-container project-{{ $project->id }}">
            <!-- Main Content Starts -->
            <div class="project-info-main-content">
                <img src="{{ asset($project->image) }}" alt="Project Image">
            </div>
            <!-- Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="projects-info row">
                <div class="col-12 p-none">
                    <h3 class="font-family-irbold" style="line-height: 3rem;">{{ $project->title }}</h3>
                    <div class="project-details">
                        <span><i class="fa fa-file-text-o"></i></span>
                        <span class="project-label"> نوع پروژه </span>:
                        <p > {{ $project->description }} </p>
                    </div>
                    <a href="{{ $project->link }}" class="btn"><span><i class="fa fa-external-link"></i>نمایش</span></a>
                </div>
                <div class="text-left col-12 p-none">
                    <a href="#" class="btn btn-secondary close-project"><span><i class="fa fa-close"></i> بستن </span></a>
                </div>
            </div>
            <!-- Project Details Ends -->
        </div>
        <!-- Portfolio Project Content Ends -->
    @endforeach

    <!-- Portfolio Project Content Ends -->
    <span class="back-mobile close-project "><i class="fa fa-arrow-left "></i></span>
</section>
