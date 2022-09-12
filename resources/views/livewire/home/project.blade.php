<div id="portfolio" class="tokyo_tm_section">
    <div class="container">
        <div class="tokyo_tm_portfolio">
            <div class="tokyo_tm_title" dir="rtl">
                <div class="title_flex">
                    <div class="left">
                        <span>پروژه ها</span>
                        <h3>نمونه کار ها و پروژ ها</h3>
                    </div>
                </div>
            </div>
            <div class="list_wrapper">
                <ul class="portfolio_list gallery_zoom">
                    @foreach ($author->projects as $project)
                        <li class="detail">
                            <div class="inner" >
                                <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="{{ $author->fullname }}" data-category="{{ $project->title }}">
                                    <a class="popup_info" href="#">
                                        <img src="{{ asset('home-assets/img/thumbs/1-1.jpg') }}" alt="{{ $project->title }}" />
                                        <div class="main_image" data-img-url="{{ asset($project->image) }} "></div>
                                    </a>
                                </div>
                            </div>
                            <div class="details_all_wrap">
                                <div class="popup_details">
                                    <div class="top_image"></div>
                                    <div class="portfolio_main_title"></div>
                                    <div class="main_details">
                                        <div class="textbox" dir="rtl">
                                        <p>{{ $project->description }}</p>
                                        </div>
                                        <div class="detailbox" dir="rtl">
                                            <ul>
                                                <li>
                                                    <span class="first">آدرس</span>
                                                    <span><a href="{{ $project->link }}">{{ $project->link }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="first">اشتراک گذاری</span>
                                                        <ul class="share">
                                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('home') }}&quote=اردوان20%شام20%روشن"><img class="svg" src="{{ asset('home-assets/img/svg/social/facebook.svg') }}" alt="" /></a></li>
                                                            <li><a href="https://twitter.com/intent/tweet?text=اردوان20%شام20%روشن!&url={{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/twitter.svg') }}" alt="" /></a></li>
                                                            <li><a href="http://instagram.com/sharer.php?u={{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/instagram.svg') }}" alt="" /></a></li>
                                                            <li><a href="https://wa.me/?text=اردوان20%شام20%روشن%5Cn%20{{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/whatsapp.svg') }}" alt="" /></a></li>
                                                            <li><a href="https://t.me/share/url?url={{ route('home') }}&text=اردوان20%شام20%روشن"><img class="svg" src="{{ asset('home-assets/img/svg/social/telegram.svg') }}" alt="" /></a></li>
                                                            <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('home') }}"><img class="svg" src="{{ asset('home-assets/img/svg/social/linkedin.svg') }}" alt="" /></a></li>

                                                        </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
