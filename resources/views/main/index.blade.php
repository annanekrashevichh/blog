@extends('layouts.main')

@section('content')

<!--========== PAGE LAYOUT ==========-->
<!-- Our Exceptional Solutions -->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2>Our Exceptional Solutions</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
        </div>
    </div>
    <!--// end row -->

    <div class="row row-flex">

        @foreach($posts as $post)
        <!-- Our Exceptional Solutions -->
        <div class="col-sm-4 margin-b-50">
            <div class="margin-b-20">
                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                    <img class="img-responsive w-100" src="{{ 'storage/' . $post->preview_image }}" alt="Our Exceptional Solutions Image">
                </div>
            </div>
            <h3><a href="">{{ $post->title }}</a><span class="text-uppercase margin-l-20">{{ $post->category->title }}</span></h3>

            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
            <a class="link" href="#">Read More</a>
        </div>
        <!-- End Our Exceptional Solutions -->
        @endforeach

    </div>

    <div class="posts-pagination margin-b-100">
        {{ $posts->links() }}
    </div>
    <!--// end row -->

    <section class="margin-b-50">
        <h2>Random posts</h2>

        <div class="row row-flex margin-b-50 row-flex">
            @foreach($randomPosts as $post)
                <!-- Our Exceptional Solutions -->
                <div class="col-sm-3 margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive w-100" src="{{ 'storage/' . $post->preview_image }}" alt="Our Exceptional Solutions Image">
                        </div>
                    </div>
                    <h3><a href="">{{ $post->title }}</a></h3>
                    <p><span class="text-uppercase margin-l-20">{{ $post->category->title }}</span></p>
                    <p><a class="link" href="#">Read More</a></p>

                </div>
                <!-- End Our Exceptional Solutions -->
            @endforeach
        </div>
    </section>

    <section class="margin-b-50">
            <h2>Popular posts</h2>

            <div class="row row-flex margin-b-50 row-flex">
                @foreach($likedPosts as $post)
                    <!-- Our Exceptional Solutions -->
                    <div class="col-sm-3 margin-b-50">
                        <div class="margin-b-20">
                            <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive w-100" src="{{ 'storage/' . $post->preview_image }}" alt="Our Exceptional Solutions Image">
                            </div>
                        </div>
                        <h3><a href="">{{ $post->title }}</a></h3>
                        <p><span class="text-uppercase margin-l-20">{{ $post->category->title }}</span></p>
                        <p><a class="link" href="#">Read More</a></p>

                    </div>
                    <!-- End Our Exceptional Solutions -->
                @endforeach
            </div>
    </section>
    </div>
    <!--// end row -->


</div>
<!-- End Our Exceptional Solutions -->

@endsection
