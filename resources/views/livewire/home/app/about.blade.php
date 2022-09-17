<section id="about ">
    <!-- Main Heading Starts -->
    <div class="container text-center page-title">
        <h2 class="text-center"> درباره <span>من</span></h2>
        <span class="title-head-subtitle"> هر کسی باید یاد بگیره که چه‌طور کد بزنه چرا که برنامه‌نویسی به شما یاد می‌ده که چه‌طور فکر کنید.

        </span>
    </div>
    <!-- Main Heading Ends -->
    <div class="container infos">
        <div class="row personal-info">
            <!-- Personal Infos Starts -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="image-container">
                    <img class="img-fluid d-block" src="{{ $author->photo }}" alt="" />
                </div>
                <p class="d-block d-md-none"> من یک طراح و توسعه دهنده مستقل و مستقر در تهران ، ایران هستم. من در تلاش هستم تا از طریق کد دقیق و طراحی کاربر محور ، برنامه های کاربردی وب همه جانبه و زیبا بسازم. </p>
            </div>
            <div class="p-3 py-4 shadow-sm row col-xl-6 col-lg-6 col-md-12">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                    <ul class="list-1">
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> نام </span> {{ $author->first_name }} </h6>
                        </li>
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> نام خانوادگی </span> {{ $author->last_name }} </h6>
                        </li>
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> تاریخ تولد </span> {{ $birthDate }} </h6>
                        </li>
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> ملیت </span> ایرانی </h6>
                        </li>
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> میزان سابقه کار </span> 3 سال </h6>
                        </li>
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> آدرس </span> {{ $author->city }} </h6>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <ul class="list-2">
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> فریلنسر </span> بله </h6>
                        </li>
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> زبان </span> فارسی </h6>
                        </li>
                        <li>
                            <h6 class="d-flex justify-content-between">
                                <span class="font-family-irbold"> تلفن </span>{{ $author->mobile }} </h6>
                        </li>
                        <li>
                            <h6 class="d-flex flex-column justify-content-between">
                                <span class="font-family-irbold"> ایمیل </span> {{ $author->email }} </h6>
                        </li>
                    </ul>
                </div>
                <div class="col-12 resume-btn-container">
                    <a href="#" class="btn btn-resume"><span><i class="fa fa-download"></i> دانلود رزومه </span></a>
                </div>
            </div>
            <!-- Personal Infos Ends -->
        </div>
    </div>
    <!-- Download CV Starts -->
    <div class="container mx-auto text-center col-12">
        <hr class="about-section" />
    </div>
    <!-- Download CV Ends -->
    <!-- Resume Starts -->
    <div class="resume-container">
        <div class="container">
            <div class="row">
                <!-- Experience Starts -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <h2 class="font-family-irbold title-section"> تجربه کاری </h2>
                    <div class="resume-items">
                        <!-- Item Starts -->

                        @foreach ($experiences as $experience)
                            <!-- Item Starts -->
                            <div class="item">
                                <span class="bullet"></span>
                                <div class="card">
                                    <div class="card-header">
                                        <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-left"></i>{{ $experience->date }}</span>
                                        <span class="d-block ">

                                            <span class="font-family-irbold badge badge-warning">{{ $experience->title }}</span>
                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <p>{{ $experience->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item Ends -->
                        @endforeach
                    </div>

                </div>
                <!-- Experience Ends -->
                <!-- Education Starts -->
                <div class="col-xl-6 col-lg-6 col-md-6 skills-container">
                    <h2 class="font-family-irbold title-section">تحصیلات</h2>
                    <div class="resume-items">
                        <!-- Item Starts -->
                        <div class="item">
                            <span class="bullet"></span>
                            <div class="card">
                                <div class="card-header">
                                    <span class="year"><i class="fa fa-calendar"></i><i class="fa fa-caret-left"></i>1398 -1402 </span>
                                    <span class="d-block ">
                                        کارشناسی مهندسی کامپیوتر
                                        <span class="separator"></span>
                                        <span class="font-family-irbold badge badge-warning"> دانشگاه شهید چمران اهواز </span>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <p>{{ $author->study }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item Ends -->

                    </div>
                </div>
                <!-- Education Ends -->
            </div>
            <!-- Skills Starts -->
            <div class="row">
                <!-- Skill Bar Starts -->
                <div class="col-12">
                    <h2 class="font-family-irbold title-section skills-title">مهارت ها</h2>
                </div>
                <!-- Skill Bar Starts -->
                @foreach ($skills as $skill)
                    <!-- Skill Bar Starts -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <span class="skill-text d-flex justify-content-start">
                            <img class="d-block ml-1 mb-2" src="{{ $skill->image }}" alt="" style="height: 2rem !important;" />
                       <span class="mt-1"> {{ $skill->title }}</span> </span>
                        <div class="chart-bar">
                            <span class="item-progress" data-percent="{{ $skill->level }}" style="width: {{ $skill->level }}%;"></span>
                            <span class="percent text-shadow" style="left: calc({{ 100 - $skill->level }}% - 21px);">{{ $skill->level }}%<div class="arrow"></div></span>
                        </div>
                    </div>
                    <!-- Skill Bar Ends -->
                @endforeach

            </div>
            <!-- Skills Starts -->
        </div>

        <!-- Resume Ends -->
    </div>
</section>
