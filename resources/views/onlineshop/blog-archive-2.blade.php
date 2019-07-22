@extends('layouts.onlineshop')
@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="{{asset('front/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Blog Archive</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Archive</li>
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
                    <div class="aa-blog-archive-area aa-blog-archive-2">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="aa-blog-content">
                                    <div class="row">
                                        @foreach($posts as $post)
                                        <div class="col-md-4 col-sm-4">
                                            <article class="aa-latest-blog-single">
                                                <figure class="aa-blog-img">
                                                    <a href="{{route('dailyshop.blogSingle',$post->id)}}"><img alt="img" src="{{ URL::to('/') }}/uploads/post/{{$post->image->name ? $post->image->name: 'no post photo'}}"></a>
                                                    <figcaption class="aa-blog-img-caption">
                                                        <span href="#"><i class="fa fa-eye"></i>5K</span>
                                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                                        <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                                        <span href="#"><i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-blog-info">
                                                    <h3 class="aa-blog-title"><a href="{{route('dailyshop.blogSingle',$post->id)}}">{{$post->title}}</a></h3>
                                                    <p>{{ str_limit($post->body, $limit = 100, $end = '...') }}</p>
                                                    <a class="aa-read-mor-btn" href="#">Read moreaaaaaa <span class="fa fa-long-arrow-right"></span></a>
                                                </div>
                                            </article>
                                        </div>
                                            @endforeach
                                    </div>
                                </div>
                                <!-- Blog Pagination -->
                                <div class="aa-blog-archive-pagination">
                                    <nav>
                                        <ul class="pagination" style="text-align: center;display: inline-block;">
                                            <li style="color: #fffafa;">{{$posts->links()}}</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <aside class="aa-blog-sidebar">
                                    <div class="aa-sidebar-widget">
                                        <h3>Category</h3>

                                        <ul class="aa-catg-nav">
                                            @foreach($categories as $category)
                                            <li><a href="#">{{$category->name}}</a></li>
                                            @endforeach()

                                        </ul>

                                    </div>
                                    <div class="aa-sidebar-widget">
                                        <h3>Tags</h3>

                                        <div class="tag-cloud">
                                            @foreach($tags as $tag)
                                            <a href="#">{{$tag->name}}</a>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="aa-sidebar-widget">
                                        <h3>Recent Post</h3>
                                        <div class="aa-recently-views">
                                            <ul>
                                                @foreach($reposts as $repost)
                                                <li>
                                                    <a class="aa-cartbox-img" href="#"><img src="{{ URL::to('/') }}/uploads/post/{{$repost->image->name ? $repost->image->name: 'no carousel photo'}}" alt="img"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4><a href="#">{{$repost->title}}</a></h4>
                                                        <p>{{$repost->created_at->diffForHumans()}}</p>
                                                    </div>
                                                </li>
                                                    @endforeach

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
