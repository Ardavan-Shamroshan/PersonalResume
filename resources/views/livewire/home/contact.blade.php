<div id="contact" class="tokyo_tm_section" dir="rtl">
    <div class="container">
        <div class="tokyo_tm_contact">
            <div class="tokyo_tm_title">
                <div class="title_flex">
                    <div class="left" dir="rtl">
                        <span>تماس با من</span>
                        <h3>با من در تماس باش</h3>
                    </div>
                </div>
            </div>

            {{-- <div class="map_wrap">
                <div class="map" id="ieatmaps"></div>
            </div> --}}

            <div class="map_wrap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.7736235823154!2d48.65696231435483!3d31.310001364633898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc3de41de46e793%3A0x30a2a1630512d2fb!2sShahid%20Chamran%20University%20of%20Ahvaz!5e0!3m2!1sen!2s!4v1663080953497!5m2!1sen!2s"
                    width="770" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="fields">
                <form action="{{ route('home.contact') }}" method="post" class="contact_form" id="contact_form" autocomplete="off">
                    @csrf

                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                    <div class="empty_notice"><span>برای ارسال پیام لطفا همه ی ورودی ها را پر کنید</span></div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="empty_notice">
                                <span{{ $error }}< /span>
                            </div>
                        @endforeach
                    @endif
                    <div class="first">
                        <ul>
                            <li>
                                <input id="name" type="text" placeholder="نام و نام خانوادگی : نباید بیشتر از 25 کاراکتر باشد" name="contact.name">
                            </li>
                            <li>
                                <input id="email" type="text" placeholder="ایمیل : example@gmail.com" name="contact.email">
                            </li>
                        </ul>
                    </div>
                    <div class="last">
                        <textarea id="message" placeholder="پیام شما : نباید بیشتر از 150 کاراکتر باشد" name="contact.message"></textarea>
                    </div>
                    <div class="tokyo_tm_button" data-position="left">
                        <a onclick="document.getElementById('contact_form').submit()">
                            <span>ارسال</span>
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
