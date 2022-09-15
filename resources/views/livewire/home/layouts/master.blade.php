<!DOCTYPE html>
<html lang="fa">

<head>
    <livewire:home.layouts.head-tag />
</head>

<body class="light dark-header fullscreenbgimage">
    <div class="page">

        <!-- Header Starts -->
        <livewire:home.layouts.header />
        <!-- Header Ends -->

        <!-- Main Content Starts -->
        <main id="main">
            <!-- Back To Home Starts [ONLY MOBILE] -->
            <span class="back-mobile" id="back-mobile"><i class="fa fa-arrow-right"></i></span>
            <!-- Back To Home Ends [ONLY MOBILE] -->

            <livewire:home.index />

            <!-- About Section Starts -->

            <!-- About Section Ends -->
          
            <!-- Contact Section Starts -->
            <section id="contact ">
                <div class="contact-container ">
                    <!-- Main Heading Starts -->
                    <div class="container text-center page-title ">
                        <h2 class="text-center "> در تماس <span> باشید </span></h2>
                        <span class="title-head-subtitle ">من همیشه برای بحث درباره کار طراحی و مشارکت محصولات باز هستم. </span>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="container ">
                        <div class="row contact ">
                            <!-- Contact Infos Starts -->
                            <div class="col-12 col-md-4 col-xl-4 leftside ">
                                <ul class="custom-list ">
                                    <li>
                                        <h6> <span class="contact-title "> تلفن </span><i class="fa fa-whatsapp "></i><span class="contact-content ">021 10 11 12 13 </span></h6>
                                    </li>
                                    <li>
                                        <h6> <span class="contact-title "> ایمیل </span><i class="fa fa-envelope-o fs-14 "></i><span class="contact-content "> sia.sarlak@you.com </span></h6>

                                    </li>
                                    <li>
                                        <h6><span class="contact-title "> اینستاگرام </span><i class="fa fa-instagram "></i><span class="contact-content "> sia.sarlak </span></h6>

                                    </li>
                                    <li>
                                        <h6><span class="contact-title "> درایبل </span><i class="fa fa-dribbble "></i><span class="contact-content "> sia.sarlak </span></h6>
                                    </li>
                                </ul>

                                <!-- Social Media Profiles Starts -->

                                <div class="social ">
                                    <h6 class="font-family-irbold "> پروفایل های اجتماعی </h6>
                                    <ul class="text-center list-inline social social-intro p-none ">
                                        <li class="facebook "><a title="Facebook " href="# "><i class="fa fa-facebook "></i></a>
                                        </li>
                                        <li class="twitter "><a title="Twitter " href="# "><i class="fa fa-twitter "></i></a>
                                        </li>
                                        <li class="youtube "><a title="Youtube " href="# "><i class="fa fa-youtube "></i></a>
                                        </li>
                                        <li class="dribbble "><a title="Dribbble " href="# "><i class="fa fa-dribbble "></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Social Media Profiles Ends -->
                            </div>
                            <!-- Contact Infos Ends -->
                            <!-- Contact Form Starts -->
                            <div class="col-12 col-md-8 col-xl-8 rightside ">
                                <p>
                                    اگر پیشنهادی ، پروژه ای دارید یا حتی می خواهید سلام کنید .. لطفا فرم زیر را پر کنید و به زودی به شما پاسخ می دهم.
                                </p>
                                <form class="contactform " method="post " action=" ">
                                    <div class="row ">
                                        <!-- Name Field Starts -->
                                        <div class="form-group col-xl-6 "> <i class="fa fa-user prefix "></i>
                                            <input id="name" name="name" type="text" class="form-control " placeholder="نام و نام خانوادگی " required>
                                        </div>
                                        <!-- Name Field Ends -->
                                        <!-- Email Field Starts -->
                                        <div class="form-group col-xl-6 "> <i class="fa fa-envelope prefix "></i>
                                            <input id="email" type="email" name="email" class="form-control" placeholder="ایمیل شما" required>
                                        </div>
                                        <!-- Email Field Ends -->
                                        <!-- Comment Textarea Starts -->
                                        <div class="form-group col-xl-12 "> <i class="fa fa-comments prefix "></i>
                                            <textarea id="comment" name="comment" class="form-control" placeholder="پیام شما" required></textarea>
                                        </div>
                                        <!-- Comment Textarea Ends -->
                                    </div>
                                    <!-- Submit Form Button Starts -->
                                    <div class="submit-form ">
                                        <button class="btn button-animated " type="submit" name="send"><span><i class="fa fa-send"></i> ارسال پیام </span></button>
                                    </div>
                                    <!-- Submit Form Button Ends -->
                                    <div class="form-message "> <span class="text-center output_message font-family-irbold "></span>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form Ends -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section Ends -->
            <!-- Blog Section Starts -->
            <section id="blog">
                <div class="container text-center page-title ">
                    <h2 class="text-center "> آخرین <span> پست ها </span></h2>
                    <span class="title-head-subtitle ">راهنمایی ، بینش ، و بهترین شیوه در مورد طراحی وب و توسعه</span>
                </div>
                <div class="container ">
                    <div class="row ">
                        <!-- Article Starts -->
                        <div class="col-12 col-sm-6 ">
                            <article>
                                <!-- Figure Starts -->
                                <figure class="blog-figure ">
                                    <a href="blog-post.html ">
                                        <img class="img-fluid " src="img/blog/blog-post-4.jpg " alt=" ">
                                    </a>
                                    <div class="post-date "> <span>23</span>
                                        <span>دی</span>
                                    </div>
                                </figure>
                                <!-- Figure Ends -->
                                <a href="blog-post.html ">
                                    <h4>یک موضوع وردپرس را از ابتدا ایجاد کنید </h4>
                                </a>
                                <!-- Excerpt Starts -->
                                <div class="blog-excerpt ">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ...</p>
                                    <a href="blog-post.html " class="btn readmore "><span> بیشتر بخوانید </span></a>
                                </div>
                                <!-- Excerpt Ends -->
                            </article>
                        </div>
                        <!-- Article Ends -->
                        <!-- Article Starts -->
                        <div class="col-12 col-sm-6 ">
                            <article>
                                <!-- Figure Starts -->
                                <figure class="blog-figure ">
                                    <a href="blog-post.html ">
                                        <img class="img-fluid " src="img/blog/blog-post-1.jpg " alt=" ">
                                    </a>
                                    <div class="post-date "> <span>18</span>
                                        <span>مهر</span>
                                    </div>
                                </figure>
                                <!-- Figure Ends -->
                                <a href="blog-post.html ">
                                    <h4> نکات استراتژی بازاریابی موثر </h4>
                                </a>
                                <!-- Excerpt Starts -->
                                <div class="blog-excerpt ">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ...</p>
                                    <a href="blog-post.html " class="btn readmore "><span> بیشتر بخوانید </span></a>
                                </div>
                                <!-- Excerpt Ends -->
                            </article>
                        </div>
                        <!-- Article Ends -->
                        <!-- Article Starts -->
                        <div class="col-12 col-sm-6 ">
                            <article>
                                <!-- Figure Starts -->
                                <figure class="blog-figure ">
                                    <a href="blog-post.html ">
                                        <img class="img-fluid " src="img/blog/blog-post-3.jpg " alt=" ">
                                    </a>
                                    <div class="post-date "> <span>01</span>
                                        <span>تیر</span>
                                    </div>
                                </figure>
                                <!-- Figure Ends -->
                                <a href="blog-post.html ">
                                    <h4>منابع psd و sketch رایگان </h4>
                                </a>
                                <!-- Excerpt Starts -->
                                <div class="blog-excerpt ">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ...</p>
                                    <a href="blog-post.html " class="btn readmore "><span> بیشتر بخوانید </span></a>
                                </div>
                                <!-- Excerpt Ends -->
                            </article>
                        </div>
                        <!-- Article Ends -->
                        <!-- Article Starts -->
                        <div class="col-12 col-sm-6 ">
                            <article>
                                <!-- Figure Starts -->
                                <figure class="blog-figure ">
                                    <a href="blog-post.html ">
                                        <img class="img-fluid " src="img/blog/blog-post-2.jpg " alt=" ">
                                    </a>
                                    <div class="post-date "> <span>01</span>
                                        <span>تیر</span>
                                    </div>
                                </figure>
                                <!-- Figure Ends -->
                                <a href="blog-post.html ">
                                    <h4> چگونه به یک فریلنسر موفق تبدیل شویم </h4>
                                </a>
                                <!-- Excerpt Starts -->
                                <div class="blog-excerpt ">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است ...</p>
                                    <a href="blog-post.html " class="btn readmore "><span> بیشتر بخوانید </span></a>
                                </div>
                                <!-- Excerpt Ends -->
                            </article>
                        </div>
                        <!-- Article Ends -->
                        <!-- Link To Blog Starts -->
                        <div class="col-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 allposts "> <a href="blog.html " class="btn btn-secondary "><span><i class="fa fa-comments "></i> همه پستها </span></a>
                        </div>
                        <!-- Link To Blog Ends -->
                    </div>
                </div>
            </section>
            <!-- Blog Section Ends -->
        </main>
    </div>
    <!-- Main Content Ends -->
    <!-- Preloader Starts -->
    <livewire:home.layouts.preloader />
    <!-- Preloader Ends -->

    <!-- Template JS Files -->
    <script src="{{ asset('home-assets/js/jquery-2.2.4.min.js ') }}"></script>
    <script src="{{ asset('home-assets/js/jquery.animatedheadline.js ') }}"></script>
    <script src="{{ asset('home-assets/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('home-assets/js/transition.js ') }}"></script>
    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{ asset('home-assets/js/styleswitcher.js ') }}"></script>
    <!-- Main JS Initialization File -->
    <script src="{{ asset('home-assets/js/custom.js ') }}"></script>
</body>


</html>
