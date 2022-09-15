<section id="blog " class="myblog">
    <div class="container text-center page-title ">
        <h2 class="text-center "> آخرین <span> پست ها </span></h2>
        <span class="title-head-subtitle ">مهم‌ترین ویژگی یک برنامه اینه که آیا کاربر رو به هدفش می‌رسونه یا نه.
        </span>
    </div>
    <div class="container ">
        <div class="row ">
            @foreach ($posts as $post)
                <!-- Article Starts -->
                <div class="col-12 col-sm-6 ">
                    <article>
                        <!-- Figure Starts -->
                        <figure class="blog-figure ">
                            <a href="{{ route('home.blog', $post->id) }}">
                                <img class="img-fluid " src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                            </a>
                            <div class="post-date badge badge-warning"> <span><small>{{ $post->created_at->diffForHumans() }}</small></span>
                            </div>
                        </figure>
                        <!-- Figure Ends -->
                        <a href="{{ route('home.blog', $post) }}">
                            <h4> {{ $post->title }} </h4>
                        </a>
                        <!-- Excerpt Starts -->
                        <div class="blog-excerpt ">
                            <p>{{ Str::limit($post->body, 100) }}</p>
                            <a href="{{ route('home.blog', $post) }}" class="btn readmore "><span> بیشتر بخوانید </span></a>
                        </div>
                        <!-- Excerpt Ends -->
                    </article>
                </div>
                <!-- Article Ends -->
            @endforeach

            <!-- Link To Blog Starts -->
           
            <!-- Link To Blog Ends -->
        </div>
    </div>
</section>
