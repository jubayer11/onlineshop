@extends('layouts.onlineshop')
@section('content')

    <section id="aa-catg-head-banner">
        <img src="{{asset('front/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Blog Details</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- Blog Archive -->
    <section id="aa-blog-archive">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-blog-archive-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- Blog details -->
                                <div class="aa-blog-content aa-blog-details">
                                    <article class="aa-blog-content-single">
                                        <h2><a href="#">{{$post->title}}</a></h2>
                                        <div class="aa-article-bottom">
                                            <div class="aa-post-author">
                                                Posted By <a href="#">{{$post->admin->name}}</a>
                                            </div>
                                            <div class="aa-post-date">
                                                {{$post->created_at->diffForHumans()}}
                                            </div>
                                        </div>
                                        <figure class="aa-blog-img">
                                            <a href="#"><img src="{{ URL::to('/') }}/uploads/post/{{$post->image->name ? $post->image->name: 'no post photo'}}" alt="fashion img"></a>
                                        </figure>
                                       <p> {{$post->body}}

                                       </p>
                                        <div class="blog-single-bottom">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-6 col-xs-12">
                                                    <div class="blog-single-tag">
                                                        <span>Tags:</span>
                                                        @foreach($post->tags as $tag)
                                                        <a href="#">{{$tag->name}}</a>
                                                            @endforeach

                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="blog-single-social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </article>
                                    <!-- blog navigation -->

                                    <div class="aa-blog-navigation">
                                        <a class="aa-blog-prev" href="#"><span class="fa fa-arrow-left"></span>Prev Post</a>
                                        <a class="aa-blog-next" href="#">Next Post<span class="fa fa-arrow-right"></span></a>
                                    </div>

                                    <!--custom comment -->




                                    <!-- Blog Comment threats -->
                                    <div class="aa-blog-comment-threat">
                                        <h3>Comments (4)</h3>
                                        <div class="comments">
                                            <ul class="commentlist">
                                                <li>
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <img class="media-object news-img" src="{{asset('front/img/testimonial-img-3.jpg')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="author-name">Charlie Balley</h4>
                                                            <span class="comments-date"> March 26th 2016</span>
                                                            <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                                            <a href="#" class="reply-btn">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <img class="media-object news-img" src="{{asset('front/img/testimonial-img-2.jpg')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="author-name">Charlie Balley</h4>
                                                            <span class="comments-date"> March 26th 2016</span>
                                                            <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                                            <a href="#" class="reply-btn">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <ul class="children">
                                                    <li class="author-comments">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img class="media-object news-img" src="{{asset('front/img/testimonial-img-3.jpg')}}" alt="img">
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="author-name">Admin</h4>
                                                                <span class="comments-date"> March 26th 2016</span>
                                                                <span class="author-tag">Author</span>
                                                                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                                                <a href="#" class="reply-btn">Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <ul class="children">
                                                        <li>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img class="media-object news-img" src="{{asset('front/img/testimonial-img-2.jpg')}}" alt="img">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="author-name">Charlie Balley</h4>
                                                                    <span class="comments-date"> March 26th 2016</span>
                                                                    <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                                                    <a href="#" class="reply-btn">Reply</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </ul>
                                                <li>
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <img class="media-object news-img" src="{{asset('front/img/testimonial-img-2.jpg')}}" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="author-name">Charlie Balley</h4>
                                                            <span class="comments-date"> March 26th 2016</span>
                                                            <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                                            <a href="#" class="reply-btn">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="aa-blog-archive-pagination">
                                            <nav>
                                                <ul class="pagination">
                                                    <li>
                                                        <a href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li>
                                                        <a href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>

                                    <!-- blog comments form -->
                                    <div id="respond">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="checkout-area">
                                                    <form action="">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="checkout-left">
                                                                    <div class="panel-group" id="accordion">
                                                                        <!-- Login section -->
                                                                        <div class="panel panel-default aa-checkout-login">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                                        Login to leave a comment
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                                <div class="panel-body">
                                                                                    <p>UserName:</p>
                                                                                    <input type="text" placeholder="Username or email">
                                                                                    <p>Password:</p>
                                                                                    <input type="password" placeholder="Password">
                                                                                    <br>
                                                                                    <br>
                                                                                    <button type="submit" class="aa-browse-btn">Login</button>
                                                                                    <button href="#" class="aa-browse-btn">Signup</button>
                                                                                    <label for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                                                                                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- blog sidebar -->
                            <div class="col-md-3">
                                <aside class="aa-blog-sidebar">
                                    <div class="aa-sidebar-widget">
                                        <h3>Category</h3>
                                        <ul class="aa-catg-nav">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="">Women</a></li>
                                            <li><a href="">Kids</a></li>
                                            <li><a href="">Electornics</a></li>
                                            <li><a href="">Sports</a></li>
                                        </ul>
                                    </div>
                                    <div class="aa-sidebar-widget">
                                        <h3>Tags</h3>
                                        <div class="tag-cloud">
                                            <a href="#">Fashion</a>
                                            <a href="#">Ecommerce</a>
                                            <a href="#">Shop</a>
                                            <a href="#">Hand Bag</a>
                                            <a href="#">Laptop</a>
                                            <a href="#">Head Phone</a>
                                            <a href="#">Pen Drive</a>
                                        </div>
                                    </div>
                                    <div class="aa-sidebar-widget">
                                        <h3>Recent Post</h3>
                                        <div class="aa-recently-views">
                                            <ul>
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img src="{{asset('front/img/woman-small-2.jpg')}}" alt="img"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                        <p>March 26th 2016</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img src="{{asset('front/img/woman-small-1.jpg')}}" alt="img"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4><a href="#">Lorem ipsum dolor.</a></h4>
                                                        <p>March 26th 2016</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img src="{{asset('front/img/woman-small-2.jpg')}}" alt="img"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4><a href="#">Lorem ipsum dolor.</a></h4>
                                                        <p>March 26th 2016</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Blog Archive -->
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
