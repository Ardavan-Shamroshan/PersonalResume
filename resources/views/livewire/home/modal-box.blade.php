<div class="tokyo_tm_modalbox"  dir="rtl">
    <div class="box_inner">
        <div class="close">
            <a href="#"><img class="svg" src="{{ asset('home-assets/img/svg/cancel.svg') }}" alt="" /></a>
        </div>
        <div class="description_wrap"></div>
    </div>
</div>


<div class="tokyo_tm_modalbox_about">
    <div class="box_inner">
        <div class="close">
            <a href="#"><img class="svg" src="{{ asset('home-assets/img/svg/cancel.svg') }}" alt="" / style="max-width: inherit;"></a>
        </div>
        <div class="description_wrap">
            <div class="my_box">
                <div class="left" style="width:100%">
                    <div class="about_title">
                        <h3>مهارت ها و تخصص های من</h3>
                    </div>
                    <div class="tokyo_progress">
                        @foreach ($skills as $skill)
                        <div class="progress_inner" data-value="{{ $skill->level }}">
                            <span><span class="label">{{ $skill->title }}</span><span class="number">{{ $skill->level }}%</span></span>
                            <div class="background">
                                <div class="bar">
                                    <div class="bar_in"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="counter">
                <div class="about_title" dir="rtl">
                    <h3>تجربیات کاری</h3>
                </div>
                <ul>
                    @foreach ($experiences as $experience)

                    <li>
                        <div class="list_inner">
                            <h3>{{ $experience->title }}</h3>
                            <span class="name">{{ $experience->date }}</span>
                            <p>{{ $experience->description }}</p>
                        </div>
                    </li>

                    @endforeach


                </ul>
            </div>
            <div class="partners">
                <div class="about_title">
                    <h3>Our Partners</h3>
                </div>
                <ul class="owl-carousel">
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/1.png') }}" alt="" /></a></li>
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/2.png') }}" alt="" /></a></li>
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/3.png') }}" alt="" /></a></li>
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/4.png') }}" alt="" /></a></li>
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/5.png') }}" alt="" /></a></li>
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/6.png') }}" alt="" /></a></li>
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/7.png') }}" alt="" /></a></li>
                    <li class="item"><a href="#"><img src="{{ asset('home-assets/img/partners/8.png') }}" alt="" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="tokyo_tm_mobile_menu">
    <div class="menu_inner">
        <div class="logo">
            <img src="{{ asset('home-assets/img/logo/dark.png') }}" alt="" />
        </div>
        <div class="menu">
            <ul>
                <li><a href="#home"><img class="svg" src="{{ asset('home-assets/img/svg/home-run.svg') }}" alt="" /></a></li>
                <li><a href="#about"><img class="svg" src="{{ asset('home-assets/img/svg/avatar.svg') }}" alt="" /></a></li>
                <li><a href="#portfolio"><img class="svg" src="{{ asset('home-assets/img/svg/briefcase.svg') }}" alt="" /></a></li>
                <li><a href="#news"><img class="svg" src="{{ asset('home-assets/img/svg/paper.svg') }}" alt="" /></a></li>
                <li><a href="#contact"><img class="svg" src="{{ asset('home-assets/img/svg/mail.svg') }}" alt="" /></a></li>
            </ul>
        </div>
    </div>
</div>
