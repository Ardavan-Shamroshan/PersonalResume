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
                    <div class="alert alert-warning alert-dismissible fade show shadow-sm border" role="alert">
                        <strong><i class="fa fa-pencil"></i></strong> دوست من، لطفا ایمیل رو به درستی و با دقت وارد کن که بتونم به شما پاسخ بدم.
                    </div>

                    <ul class="custom-list ">
                        <li>
                            <h6> <span class="contact-title "> تلفن </span><i class="fa fa-whatsapp "></i><span class="contact-content ">{{ $author->mobile }}</span></h6>
                        </li>
                        <li>
                            <h6> <span class="contact-title "> ایمیل </span><i class="fa fa-envelope-o fs-14 "></i><span class="contact-content ">{{ $author->email }} </span></h6>

                        </li>
                        <li>
                            <h6><span class="contact-title "> اینستاگرام </span><i class="fa fa-instagram "></i><span class="contact-content "> ardavanshamroshan </span></h6>

                        </li>
                        <li>
                            <h6><span class="contact-title "> تلگرام </span><i class="fa fa-telegram "></i><span class="contact-content "> Arda1_Sh </span></h6>
                        </li>
                    </ul>

                    <!-- Social Media Profiles Starts -->

                    <div class="social ">
                        <h6 class="font-family-irbold "> پروفایل های اجتماعی </h6>
                        <ul class="text-center list-inline social social-intro p-none ">
                            <li class="telegram "><a title="Telegram " href=" https://t.me/Arda1_Sh"><i class="fa fa-telegram "></i></a>
                            </li>
                            <li class="whatsapp "><a title="Whatsapp " href="whatsapp://send?abid={{ $author->mobile }}text=سلام"><i class="fa fa-whatsapp "></i></a>
                            </li>
                            <li class="instagram "><a title="Instagram " href="https://instagram.com/ardavanshamroshan?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram "></i></a>
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

                    @if (session('success'))
                        @php
                            $contact = \App\Models\Contact::query()
                                ->where('ip_address', request()->ip())
                                ->latest()
                                ->first();
                        @endphp
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $contact->name }}</strong> عزیز پیام شما با موفقیت برای من ارسال شد. سپاسگزارم از شما. در کمترین زمان ممکن پیام شما را پاسخ میدهم.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form class="contactform " id="form" action="{{ route('home.contact') }}" method="post">
                        @csrf

                        <div class="row ">
                            <!-- Name Field Starts -->
                            <div class="form-group col-xl-6 ">
                                <i class="fa fa-user prefix "></i>
                                <input id="name" name="name" type="text" class="form-control @error('name') border border-danger @enderror" placeholder="نام و نام خانوادگی " required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Name Field Ends -->
                            <!-- Email Field Starts -->
                            <div class="form-group col-xl-6 ">
                                <i class="fa fa-envelope prefix "></i>
                                <input id="email" type="email" name="email" class="form-control @error('email') border border-danger @enderror" placeholder="ایمیل شما" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Email Field Ends -->
                            <!-- Comment Textarea Starts -->
                            <div class="form-group col-xl-12 ">
                                <i class="fa fa-comments prefix "></i>
                                <textarea id="message" name="message" class="form-control @error('message') border border-danger @enderror" placeholder="پیام شما" required></textarea>
                                @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Comment Textarea Ends -->
                        </div>
                        <!-- Submit Form Button Starts -->
                        <div class="submit-form ">
                            <a href="#" onclick="document.getElementById('form').submit()" class="btn button-animated" type="submit" name="send"><span><i class="fa fa-send"></i> ارسال پیام </span></a>
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
