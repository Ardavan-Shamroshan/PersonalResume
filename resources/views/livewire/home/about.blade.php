<livewire:home.modal-box :skills="$skills" :experiences="$experiences" />

<div id="about" class="tokyo_tm_section">
    <div class="container">
        <div class="tokyo_tm_about">
            <div class="about_image">
                <img src="{{ asset('home-assets/img/thumbs/4-2.jpg') }}" alt="{{ $author->photo }}"/>
                <div class="main" data-img-url="{{ $author->photo === null ? asset('home-assets/img/slider/1.jpg') : asset($author->photo) }}"></div>
            </div>
            <div class="description">
                <h3 class="name">{{ $author->fullname }} &amp; <span>{{ $author->title }}</span></h3>
                <div class="description_inner">
                    <div class="left"  dir="rtl">
                        <p>{{ $author->about_me }}</p>
                        <div class="tokyo_tm_button">
                            <a href="#">مهارت های من</a>
                        </div>
                    </div>
                    <div class="right" dir="rtl">
                        <ul>
                            <li>
                                <p><span>متولد:</span>{{ $birthDate }}</p>
                            </li>
                            <li>
                                <p><span>سن:</span>{{ $age }}</p>
                            </li>
                            <li>
                                <p><span>آدرس:</span>{{ $author->city }}</p>
                            </li>
                            <li>
                                <p><span>ایمیل:</span></a>   <a href="mailto:{{ $author->email }}">[ایمیل&#160;محافظت شده ]</a>.<br></p>
                            </li>
                            <li>
                                <p><span>تلفن:</span><a href="tel:{{ $author->mobile }}">{{ $author->mobile }}</a></p>
                            </li>
                            <li>
                                <p><span>تحصیلات:</span>{{ $author->study }}</p>
                            </li>
                            {{-- <li>
                                <p><span>Freelance:</span>Available</p>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
