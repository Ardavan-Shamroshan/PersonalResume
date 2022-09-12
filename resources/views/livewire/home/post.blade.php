<div id="news" class="tokyo_tm_section">
    <div class="container">
        <div class="tokyo_tm_news tokyo_tm_portfolio">
            <div class="tokyo_tm_title">
                <div class="title_flex">
                    <div class="left">
                        <span>مقالات</span>
                        <h3>آخرین مقالات</h3>
                    </div>

                    {{-- <div class="portfolio_filter">
                        <ul>
                            <li><a href="#" class="current" data-filter="*" style="width: 100%">همه</a></li>
                            @foreach ($categories as $category)
                            <li><a href="#" data-filter=".{{ $category->title }}" style="width: 100%">{{ $category->title }}</a></li>
                            @endforeach

                        </ul>
                    </div> --}}


                </div>
            </div>
            <ul>

                @foreach ($author->posts as $post)
                    <li>
                        <div class="list_inner" data-category="{{ $post->category->title }}">
                            <div class="image">
                                <img src="{{ asset('home-assets/img/thumbs/4-3.jpg') }}" alt="" />
                                <div class="main" data-img-url="{{ asset($post->image) }}"></div>
                                <a class="tokyo_tm_full_link" href="#"></a>
                            </div>
                            <div class="details">
                                <div class="extra">
                                    <div class="short">
                                        <p class="date">توسط <a href="#">{{ $author->fullname }}</a> <span>{{ $post->created_at->diffForHumans() }}</span></p>
                                    </div>
                                    <div class="my_like">
                                        @if ($post->likes()->where('ip_address', $clientIPAddress)->get()->isEmpty())
                                            <a href="#" wire:click="like({{ $post }})"><img class="svg" src="{{ asset('home-assets/img/svg/like.svg') }}" alt="" /><span>{{ $post->likes->count() }}</span></a>
                                        @else
                                            <a href="#" wire:click="disLike({{ $post }})"><img class="svg" src="{{ asset('home-assets/img/svg/like.svg') }}" alt="" style="filter: invert(28%) sepia(75%) saturate(2390%) hue-rotate(0deg) brightness(118%) contrast(119%);" /><span>{{ $post->likes->count() }}</span></a>
                                        @endif

                                    </div>
                                </div>
                                <h3 class="title"><a href="#">{{ $post->title }}</a></h3>
                                <div class="tokyo_tm_read_more">
                                    <a href="#"><span>بیشتر بخوانید</span></a>
                                </div>
                            </div>
                            <div class="main_content">
                                <div class="descriptions">
                                    <p>
                                        {{ $post->body }}</p>
                                </div>
                                <div class="news_share">
                                    <span>اشتراک گذاری:</span>
                                    <ul>
                                        <li><a href="#"><img class="svg" src="{{ asset('home-assets/img/svg/social/facebook.svg') }}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('home-assets/img/svg/social/twitter.svg') }}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('home-assets/img/svg/social/instagram.svg') }}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('home-assets/img/svg/social/dribbble.svg') }}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{ asset('home-assets/img/svg/social/tik-tok.svg') }}" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
