
@extends('layouts.user.app')

@section('css')

<!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/bootstrap.rtl.min.css')}}"> 
    <link rel="stylesheet" href="{{URL::asset('assets2/css/menu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/slider-search2.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/maps.css')}}">
    <link rel="stylesheet" id="color" href="{{URL::asset('assets2/css/colors/darkblue.css')}}">

       <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search-form.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets2/css/search.css')}}">

@endsection


@section('content')

<body class="inner-pages hd-white">
    <!-- START SECTION HEADINGS -->
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Blog Details</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; {{ $article->title }} Details</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog blog-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item details no-mb2">
                                    <a href="" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="img-responsive" src="{{ asset('images/blogs/'.$article->image ) }}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text details pb-0">
                                        <a href=""><h3>{{ $article->title }}</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr big-news details visib mb-0">
                                            <p class="mb-3">{{ $article->article }}</p>

                                            <p class="d-none d-sm-none d-lg-block d-md-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="comments"><br>
                            <h3 class="mb-5">{{ count($article->comments) }} Comments</h3>
                            @foreach($article->comments as $comment)
                            <div class="row mb-4">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <h5 class="mb-1">{{$comment->fname}} {{$comment->lname}}</h5>
                                            <p class="mb-4">{{ $comment->created_at }}</p>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            <!-- <div class="row ml-5">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <h5 class="mb-1">Mary Tyron</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row my-4">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-6.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info no-mb">
                                            <h5 class="mb-1">Leo Williams</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                        </section>
                        <section class="leve-comments wpb">
                            <h3 class="mb-5">Leave a Comment </h3>
                            <div class="row">
                                <div class="col-md-12 data">
                                    <form action="{{ route('storecomment', $article->id ) }}" method="post">
                                    @csrf
                                        @auth
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="fname" class="form-control" value={{ Auth::user()->name }} required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="lname" class="form-control" value={{ Auth::user()->name }} required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" value={{ Auth::user()->email }} required>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        @endauth
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" name="comment" id="exampleTextarea" rows="8" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <aside class="col-lg-3 col-md-12">
                        <div class="widget">
                            <h5 class="font-weight-bold mb-4">Search</h5>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                            </div>
                            <div class="recent-post py-5">
                                <h5 class="font-weight-bold">Category</h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>House</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Garages</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Estate</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Home</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bath</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Beds</a></li>
                                </ul>
                            </div>
                            <div class="recent-post">
                                <h5 class="font-weight-bold mb-4">Popular Tags</h5>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                </div>
                            </div>
                            <div class="recent-post pt-5">
                                <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="blog-details.html"><img src="images/blog/b-1.jpg" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="blog-details.html"><h6>Real Estate</h6></a>
                                        <p>May 10, 2020</p>
                                    </div>
                                </div>
                                <div class="recent-main my-4">
                                    <div class="recent-img">
                                        <a href="blog-details.html"><img src="images/blog/b-2.jpg" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="blog-details.html"><h6>Real Estate</h6></a>
                                        <p>May 10, 2020</p>
                                    </div>
                                </div>
                                <div class="recent-main no-mb">
                                    <div class="recent-img">
                                        <a href="blog-details.html"><img src="images/blog/b-3.jpg" alt=""></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="blog-details.html"><h6>Real Estate</h6></a>
                                        <p>May 10, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>


        <!-- ARCHIVES JS -->
        @endsection

@section('js')


        <!-- ARCHIVES JS -->
        <script src="{{URL::asset('assets2/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery-ui.js')}}"></script>
        <script src="{{URL::asset('assets2/js/range-slider.js')}}"></script>
        <script src="{{URL::asset('assets2/js/tether.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/mmenu.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/slick4.js')}}"></script>
        <script src="{{URL::asset('assets2/js/fitvids.js')}}"></script>
        <script src="{{URL::asset('assets2/js/smooth-scroll.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/popup.js')}}"></script>
        <script src="{{URL::asset('assets2/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/newsletter.js')}}"></script>
        <script src="{{URL::asset('assets2/js/timedropper.js')}}"></script>
        <script src="{{URL::asset('assets2/js/datedropper.js')}}"></script>
        <script src="{{URL::asset('assets2/js/jqueryadd-count.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet-gesture-handling.min.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet-providers.js')}}"></script>
        <script src="{{URL::asset('assets2/js/leaflet.markercluster.js')}}"></script>
        <script src="{{URL::asset('assets2/js/map-single.js')}}"></script>
        <script src="{{URL::asset('assets2/js/color-switcher.js')}}"></script>
        <script src="{{URL::asset('assets2/js/inner.js')}}"></script>

        <!-- Date Dropper Script-->
        <script>
            $('#reservation-date').dateDropper();

        </script>
        <!-- Time Dropper Script-->
        <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });

        </script>

        <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });

        </script>

        <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });

        </script>

@endsection

    </div>
    <!-- Wrapper / End -->
</body>

</html>
