<section id="home" class="active" style="background-image: url({{ $author->photo }}) !important;">

    <!-- Text Rotator Starts -->
    <div class="main-text-container">

        <div class="main-text" id="selector">
            <h3>سلام وقت بخیر </h3>
            <h1 class="ah-headline">
                من
                <span class="ah-words-wrapper">
                    <b class="is-visible">{{ $author->fullname }}</b>
                    <b>طراح وب سایت</b>
                    <b>برنامه نویس</b>
                    <b>فریلنسر</b>
                </span> هستم
            </h1>
            <p> {{ $author->about_me }}</p>

            <div class="call-to-actions-home">
                <div class="text-right">
                    <a href="#about" class="btn link-portfolio-one"><span><i class="fa fa-user"></i> اطلاعات بیشتر در مورد من </span></a>
                    <a href="#work" class="btn btn-secondary link-portfolio-two"><span><i class="fa fa-suitcase"></i>نمونه کارها </span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Text Rotator Ends -->

</section>
