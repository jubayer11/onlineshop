@extends('layouts.onlineshop')
@section('content')
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        @foreach ($carousel as $car)
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{ URL::to('/') }}/uploads/carousel/{{$car->photo ? $car->photo: 'no carousel photo'}}" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>{{$car->save}}</span>
                                <h2 data-seq>{{$car->name}}</h2>
                                <p data-seq>{{$car->body}}</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        @endforeach
                       </ul>

                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->








    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            <!-- promo left -->
                            <div class="col-md-5 no-padding">
                                <div class="aa-promo-left">
                                    @isset($carousel1)
                                    <div class="aa-promo-banner">
                                        <img src="{{ URL::to('/') }}/uploads/carousel/{{$carousel1->photo ? $carousel1->photo: 'no carousel photo'}}" alt="img">
                                        <div class="aa-prom-content">
                                            <span>{{$carousel1->name}}</span>
                                            <h4><a href="#">For {{$carousel1->categories->name}}</a></h4>
                                        </div>
                                    </div>
                                        @endisset
                                </div>
                            </div>
                            <!-- promo right -->



                            <div class="col-md-7 no-padding">

                                <div class="aa-promo-right">
                                    @foreach ($carousel2 as $carousel)
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="{{ URL::to('/') }}/uploads/carousel/{{$carousel->photo ? $carousel->photo: 'no carousel photo'}}" alt="img">
                                            <div class="aa-prom-content">
                                                <span>{{$carousel->name}}</span>
                                                <h4><a href="#">For {{$carousel->categories->name}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <div id="app">
        <app-home></app-home>

    </div>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="{{asset('front/img/fashion-banner.jpg')}}" alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <div id="app1">
        <second-app-home> </second-app-home>

    </div>
    <!-- / popular section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Testimonial -->
    <section id="aa-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-testimonial-area">
                        <ul class="aa-testimonial-slider">
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="{{asset('front/img/testimonial-img-2.jpg')}}" alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Allison</p>
                                        <span>Designer</span>
                                        <a href="#">Dribble.com</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="{{asset('front/img/testimonial-img-1.jpg')}}" alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>KEVIN MEYER</p>
                                        <span>CEO</span>
                                        <a href="#">Alphabet</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img" src="{{asset('front/img/testimonial-img-3.jpg')}}" alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Luner</p>
                                        <span>COO</span>
                                        <a href="#">Kinatic Solution</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Testimonial -->

    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">
                            <!-- single latest blog -->
                           @foreach($posts as $post)
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="{{ URL::to('/') }}/uploads/post/{{$post->image->name ? $post->image->name: 'no carousel photo'}}"alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">{{$post->title}}</a></h3>
                                        <p>{{$post->body}}</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest Blog -->

    <!-- Client Brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li><a href="#"><img src="{{asset('front/img/client-brand-java.png')}}" alt="java img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-jquery.png')}}" alt="jquery img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-html5.png')}}" alt="html5 img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-css3.png')}}" alt="css3 img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-wordpress.png')}}" alt="wordPress img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-joomla.png')}}" alt="joomla img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-java.png')}}" alt="java img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-jquery.png')}}" alt="jquery img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-html5.png')}}" alt="html5 img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-css3.png')}}" alt="css3 img"></a></li>
                            <li><a href="#"><img src="{{asset('front/img/client-brand-wordpress.png')}}" alt="wordPress img"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Client Brand -->

@stop
@section('subscribe')
    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->

@stop
