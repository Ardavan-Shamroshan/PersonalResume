
<div class="rightpart">
    <div class="rightpart_in">

        <div id="home" class="tokyo_tm_section active">
            <div class="container">
                <div class="tokyo_tm_home">
                    <div class="home_content">
                        <div class="avatar">
                            <div class="image" data-img-url="{{ $author->photo === null ? asset('home-assets/img/slider/1.jpg') : asset($author->photo) }}"></div>
                        </div>
                        <div class="details"  dir="rtl">
                            <h3 class="name">{{ $author->first_name }} <span>{{ $author->last_name }}</span></h3>
                            <p class="job">{{ $author->title }}</p>
                            <p class="job">{{ $author->about_me }}</p>
                            <div class="social">
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('home') }}&quote=اردوان20%شام20%روشن"><img class="svg" src="{{ asset('home-assets/img/svg/social/facebook.svg') }}" alt="" /></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?text=اردوان20%شام20%روشن!&url={{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/twitter.svg') }}" alt="" /></a></li>
                                    <li><a href="http://instagram.com/sharer.php?u={{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/instagram.svg') }}" alt="" /></a></li>
                                    <li><a href="https://wa.me/?text=اردوان20%شام20%روشن%5Cn%20{{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/whatsapp.svg') }}" alt="" /></a></li>
                                    <li><a href="https://t.me/share/url?url={{ route('home') }}&text=اردوان20%شام20%روشن"><img class="svg" src="{{ asset('home-assets/img/svg/social/telegram.svg') }}" alt="" /></a></li>
                                    <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/linkedin.svg') }}" alt="" /></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       <livewire:home.about :author="$author"/>

        <div class="tokyo_tm_portfolio_titles"></div>


        <livewire:home.project :author="$author"/>


        <livewire:home.post :author="$author"/>





        <div id="contact" class="tokyo_tm_section">
            <div class="container">
                <div class="tokyo_tm_contact">
                    <div class="tokyo_tm_title">
                        <div class="title_flex">
                            <div class="left">
                                <span>Contact</span>
                                <h3>Get in Touch</h3>
                            </div>
                        </div>
                    </div>
                    <div class="map_wrap">
                        <div class="map" id="ieatmaps"></div>
                    </div>
                    <div class="fields">
                        <form action="https://marketifythemes.net/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="first">
                                <ul>
                                    <li>
                                        <input id="name" type="text" placeholder="Name">
                                    </li>
                                    <li>
                                        <input id="email" type="text" placeholder="Email">
                                    </li>
                                </ul>
                            </div>
                            <div class="last">
                                <textarea id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="tokyo_tm_button" data-position="left">
                                <a id="send_message" href="#">
                                    <span>Send Message</span>
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
