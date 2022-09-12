<div class="leftpart">
    <div class="leftpart_inner">
        <div class="logo">
            <a href="#"><img src="{{ $setting->logo === null ? asset('home-assets/img/logo/dark.png') : asset($setting->logo) }}" alt="" /></a>
        </div>
        <div class="menu">
            <ul>
                <li class="active"><a href="#home">خانه</a></li>
                <li><a href="#about">درباره من</a></li>
                <li><a href="#portfolio">نمونه پروژه ها</a></li>
                <li><a href="#news">مقالات</a></li>
                <li><a href="#contact">تماس با من</a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>{{ $setting->copy_right }}</p>
        </div>
    </div>
</div>
