<div class="wrapper">
    <div class="container-fluid page-title post-title" style="background-image: url({{ asset($post->image) }})">
        <div class="content-banner">
            <h2 class="text-center">
                <span> {{ $post->title }}</span>
            </h2>
            <div class="meta">
                <span><i class="fa fa-user"></i> <a href="#"> {{ $post->author->fullname }} </a></span>
                <span class="date"><i class="fa fa-calendar"></i> {{ jalaliDate($post->created_at) }}</span>
                <span class="permalink"><i class="fa fa-link"></i> <a href="{{ route('home.blog', $post) }}"> لینک کوتاه </a></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div>
                <!-- Article Starts -->
                <article>
                    <!-- Excerpt Starts -->
                    <div class="blog-excerpt">

                        <p class="shadow-sm rounded p-4" style="cursor: text">{{ $post->body }}</p>
                        <!-- Meta Starts -->
                        <div class="meta">
                            <span><i class="fa fa-user"></i> <a href="#"> {{ $post->author->fullname }} </a></span>
                            <span class="date"><i class="fa fa-calendar"></i> {{ jalaliDate($post->created_at) }}</span>
                            <span class="permalink"><i class="fa fa-link"></i> <a href="{{ route('home.blog', $post) }}"> لینک کوتاه </a></span>
                        </div>
                        <!-- Meta Ends -->
                    </div>
                    <!-- Excerpt Ends -->

                    <div class="call-to-actions-home mt-3">
                        <div class="text-right">
                            <a href="{{ route('home') . '/#blog' }}" class="btn btn-secondary "><span><i class="fa fa-arrow-circle-right"></i>بازگشت </span></a>
                        </div>
                    </div>
                </article>
                <!-- Article Ends -->
            </div>
        </div>
    </div>
</div>
