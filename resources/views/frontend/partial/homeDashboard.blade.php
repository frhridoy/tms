@extends('frontend.master')
@section('content')
    <div class="slider container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="single.html">
                        <img src="{{url('forntend/')}}/assets/images/slider/slid_2.jpg" class="d-block w-100"
                            alt="...">
                        <div class="detail-card">
                            <p>Pictures, abstract symbols the ingredients with symbols the
                            </p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="single.html">
                        <img src="{{ url('forntend/') }}/assets/images/slider/slid_1.jpg" class="d-block w-100"
                            alt="...">
                        <div class="detail-card">
                            <p>Pictures, abstract symbols the ingredients with symbols the
                            </p>
                        </div>
                    </a>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- ################# Why Choos US Starts Here #######################--->

    <div class="why-choos-us container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Why Choos Us ?</h2>
                <p>Sagittis vulputate magna sagittis sagittis erat feugiat nullam cubilia amet dignissim Euismod.</p>
            </div>
            <div class="why-ro row">
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="far fa-calendar-plus"></i>
                        </div>
                        <div class="detail">
                            <h4>Easy Booking</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="detail">
                            <h4>Value for Money</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="detail">
                            <h4>Passionate Travel</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="detail">
                            <h4>Awesome Places</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <div class="detail">
                            <h4>Diverse Destinations</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-card">
                        <div class="icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="detail">
                            <h4>24 x 7 Support</h4>
                            <p>Turpis accumsan. Proin id ligula suspendisse. Aliquet fringilla, aptent eu dignissim.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ################# Popular Packages Starts Here #######################--->

    <div class="popular-pack no-bgpack container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Our Packages</h2>
                <p>Sagittis vulputate magna sagittis sagittis erat feugiat nullam cubilia amet dignissim Euismod.</p>
            </div>
            <div class="row pack-row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pack-col">
                        <img src="{{ url('forntend/') }}/assets/images/packages/p1.jpg" alt="">
                        <div class="revire row no-margin">
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span class="pric">
                                BDT 7500
                            </span>
                        </div>
                        <div class="detail row no-margin">
                            <h4>Coxs Bazar</h4>
                            <p>Mattis interdum nunc massa. Velit. Nonummy penatibus</p>

                            <button class="btn btn-outline-success">Book Now</button>

                        </div>
                        <div class="options row no-margin">
                            <ul>
                                <li><i class="fas fa-car"></i></li>
                                <li><i class="fab fa-fly"></i></li>
                                <li><i class="fas fa-cocktail"></i></li>
                                <li><i class="fas fa-umbrella-beach"></i></li>
                                <li><i class="far fa-bell"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pack-col">
                        <img src="{{ url('forntend/')}}/assets/images/packages/p2.jpg" alt="">
                        <div class="revire row no-margin">
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span class="pric">
                                BDT 6000
                            </span>
                        </div>
                        <div class="detail row no-margin">
                            <h4> Beauty of Sylet</h4>
                            <p>Mattis interdum nunc massa. Velit. Nonummy penatibus</p>
                            <button class="btn btn-outline-success">Book Now</button>
                        </div>
                        <div class="options row no-margin">
                            <ul>
                                <li><i class="fas fa-car"></i></li>
                                <li><i class="fab fa-fly"></i></li>
                                <li><i class="fas fa-cocktail"></i></li>
                                <li><i class="fas fa-umbrella-beach"></i></li>
                                <li><i class="far fa-bell"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pack-col">
                        <img src="{{ url('forntend/') }}/assets/images/packages/p3.jpg" alt="">
                        <div class="revire row no-margin">
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span class="pric">
                                BDT 5000
                            </span>
                        </div>
                        <div class="detail row no-margin">
                            <h4>Chottogram</h4>
                            <p>Mattis interdum nunc massa. Velit. Nonummy penatibus</p>

                            <button class="btn btn-outline-success">Book Now</button>
                        </div>
                        <div class="options row no-margin">
                            <ul>
                                <li><i class="fas fa-car"></i></li>
                                <li><i class="fab fa-fly"></i></li>
                                <li><i class="fas fa-cocktail"></i></li>
                                <li><i class="fas fa-umbrella-beach"></i></li>
                                <li><i class="far fa-bell"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--################### Destinations Starts Here #######################--->

    <div class="destinations container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>Our Destinations</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum.
                    Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
            </div>

            <div class="dest-row row">
                <div class="col-lg-4 col-md-6">
                    <div class="dest-col">
                        <div class="dest-img">
                            <img src="{{ url('forntend/') }}/assets/images/destination/d2.jpg" alt="">


                        </div>
                        <h3>Switzerland</h3>

                        <button class="btn btn-outline-success">Book Now</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="dest-col">
                        <div class="dest-img">
                            <img src="{{ url('forntend/') }}/assets/images/destination/d3.jpg" alt="">
                        </div>
                        <h3>Maldives</h3>

                        <button class="btn btn-outline-success">Book Now</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="dest-col">
                        <div class="dest-img">
                            <img src="{{ url('forntend/') }}/assets/images/destination/d4.jpg" alt="">
                        </div>
                        <h3>Srilanka</h3>

                        <button class="btn btn-outline-success">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <!--################### Tour Review Starts Here #######################--->

    <div class="review container-fluid">
        <div class="container">
            <div class="session-title">
                <h2>What people say about Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin nisi id consequat bibendum.
                    Phasellus at convallis elit. In purus enim, scelerisque id arcu vitae</p>
            </div>
            <div class="row review-row">
                <div class="col-md-6">
                    <div class="review-col">
                        <div class="profil">
                            <img src="{{ url('forntend/') }}/assets/images/testimonial/member-01.jpg" alt="">
                        </div>
                        <div class="review-detail">
                            <h4>Canadian Rockies</h4>
                            <p>The sightseeing and activities were better than we even thought! I still can’t believe we did
                                so much in such a short time, but we did not feel stressed. We really loved the tour and
                                would do it all over again in a minute! Thanks.</p>
                            <h6>John Smith</h6>
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="review-col">
                        <div class="profil">
                            <img src="{{ url('forntend/') }}/assets/images/testimonial/member-01.jpg" alt="">
                        </div>
                        <div class="review-detail">
                            <h4>Lake Tahoe Adventure</h4>
                            <p>The sightseeing and activities were better than we even thought! I still can’t believe we did
                                so much in such a short time, but we did not feel stressed. We really loved the tour and
                                would do it all over again in a minute! Thanks.</p>
                            <h6>John Smith</h6>
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="review-col">
                        <div class="profil">
                            <img src="{{ url('forntend/') }}/assets/images/testimonial/member-01.jpg" alt="">
                        </div>
                        <div class="review-detail">
                            <h4>Discover Costa Rica</h4>
                            <p>The sightseeing and activities were better than we even thought! I still can’t believe we did
                                so much in such a short time, but we did not feel stressed. We really loved the tour and
                                would do it all over again in a minute! Thanks.</p>
                            <h6>John Smith</h6>
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="review-col">
                        <div class="profil">
                            <img src="{{ url('forntend/') }}/assets/images/testimonial/member-01.jpg" alt="">
                        </div>
                        <div class="review-detail">
                            <h4>Canadian Rockies</h4>
                            <p>The sightseeing and activities were better than we even thought! I still can’t believe we did
                                so much in such a short time, but we did not feel stressed. We really loved the tour and
                                would do it all over again in a minute! Thanks.</p>
                            <h6>John Smith</h6>
                            <ul class="rat">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--*************** Blog Starts Here ***************-->

    <div class="container-fluid blog">
        <div class="container">

            <div class="blog-row row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-col">
                        <img src="{{ url('forntend/') }}/assets/images/destination/d1.jpg" alt="">
                        <span>August 9, 2019</span>
                        <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent
                            accumsan, leo in venenatis dictum, </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-col">
                        <img src="{{ url('forntend/') }}/assets/images/destination/d2.jpg" alt="">
                        <span>August 9, 2019</span>
                        <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent
                            accumsan, leo in venenatis dictum, </p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-col">
                        <img src="{{ url('forntend/') }}/assets/images/destination/d3.jpg" alt="">
                        <span>August 9, 2019</span>
                        <h4>Orci varius consectetur adipiscing natoque penatibus</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent
                            accumsan, leo in venenatis dictum, </p>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection
