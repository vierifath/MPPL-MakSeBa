@extends('template.master')


@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(/template/img/bg-img/bg1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                            <h2 data-animation="fadeInUp" data-delay="300ms">Hamburger Homemade</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Hamburger lezat dengan cita rasa khas Indonesia</p>
                            <a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See Receipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(/template/img/bg-img/bg6.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                            <h2 data-animation="fadeInUp" data-delay="300ms">Salad Sehat</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Salad sehat dengan gizi yang cocok untuk memenuhi asupan sehari-hari </p>
                            <a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See Receipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(/template/img/bg-img/bg7.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="hero-slides-content" data-animation="fadeInUp" data-delay="100ms">
                            <h2 data-animation="fadeInUp" data-delay="300ms">Fruit Smoothie</h2>
                            <p data-animation="fadeInUp" data-delay="700ms">Smoothie yang terbuat dari buah buahan segar cocok untuk menjaga kesehatan tubuh</p>
                            <a href="#" class="btn delicious-btn" data-animation="fadeInUp" data-delay="1000ms">See Receipe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Catagory Area Start ##### -->
<section class="top-catagory-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <!-- Top Catagory Area -->
            <div class="col-12 col-lg-6">
                <div class="single-top-catagory">
                    <img src="{{ asset('/template/img/bg-img/bg6.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="top-cta-content">
                        <h3>Strawberry Cake</h3>
                        <h6>Simple &amp; Delicios</h6>
                        <a href="receipe-post.html" class="btn delicious-btn">See Full Receipe</a>
                    </div>
                </div>
            </div>
            <!-- Top Catagory Area -->
            <div class="col-12 col-lg-6">
                <div class="single-top-catagory">
                    <img src="{{ asset('/template/img/bg-img/bg3.jpg')}}" alt="">
                    <!-- Content -->
                    <div class="top-cta-content">
                        <h3>Chinesse Noodles</h3>
                        <h6>Simple &amp; Delicios</h6>
                        <a href="receipe-post.html" class="btn delicious-btn">See Full Receipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Top Catagory Area End ##### -->

<!-- ##### Best Receipe Area Start ##### -->
<section class="best-receipe-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>The best Receipies</h3>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($cuisines as $index => $cuisine)
            @if($index == 9)
            break;
            @else
            @if($cuisine->verification == "1")
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-best-receipe-area mb-30">
                    <img class="img-fluid" src="{{ url('/cuisines_photo/'.$cuisine->photo) }}" alt="User profile picture">
                    <div class="receipe-content">
                        <a href="{{ route('cuisines.show',$cuisine->id) }}">
                            <h5>{{ $cuisine->cuisine_name }}</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endif
            @endforeach
            <!-- Single Best Receipe Area -->
            <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{ asset('/template/img/bg-img/r1.jpg')}}" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Sushi Easy Receipy</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div> -->

            <!-- Single Best Receipe Area -->
            <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{ asset('/template/img/bg-img/r2.jpg')}}" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Homemade Burger</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div> -->

            <!-- Single Best Receipe Area -->
            <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{ asset('/template/img/bg-img/r3.jpg')}}" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Vegan Smoothie</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div> -->

            <!-- Single Best Receipe Area -->
            <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{ asset('/template/img/bg-img/r4.jpg')}}" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Calabasa soup</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div> -->

            <!-- Single Best Receipe Area -->
            <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{ asset('/template/img/bg-img/r5.jpg')}}" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Homemade Breakfast</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div> -->

            <!-- Single Best Receipe Area -->
            <!-- <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="{{ asset('/template/img/bg-img/r6.jpg')}}" alt="">
                        <div class="receipe-content">
                            <a href="receipe-post.html">
                                <h5>Healthy Fruit Desert</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>

    </div>
</section>
<!-- ##### Best Receipe Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<section class="cta-area bg-img bg-overlay" style="background-image: url(/template/img/bg-img/bg4.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Cta Content -->
                <div class="cta-content text-center">
                    <h2>Gluten Free Receipies</h2>
                    <p>Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accumsan molestie. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras sed accumsan neque. Ut vulputate, lectus vel aliquam congue, risus leo elementum nibh</p>
                    <a href="#" class="btn delicious-btn">Discover all the receipies</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### CTA Area End ##### -->

<!-- ##### Small Receipe Area Start ##### -->
<section class="small-receipe-area section-padding-80-0">
    <div class="container">
        <div class="row">

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr1.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Homemade italian pasta</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr2.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Baked Bread</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr3.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Scalops on salt</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr4.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Fruits on plate</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr5.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Macaroons</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr6.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Chocolate tart</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr7.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Berry Desert</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr8.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Zucchini Grilled on peper</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>

            <!-- Small Receipe Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-small-receipe-area d-flex">
                    <!-- Receipe Thumb -->
                    <div class="receipe-thumb">
                        <img src="{{ asset('/template/img/bg-img/sr9.jpg')}}" alt="">
                    </div>
                    <!-- Receipe Content -->
                    <div class="receipe-content">
                        <span>January 04, 2018</span>
                        <a href="receipe-post.html">
                            <h5>Chicken Salad</h5>
                        </a>
                        <div class="ratings">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>2 Comments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Small Receipe Area End ##### -->

@endsection