@extends('layouts.shop')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/css/flexslider.css">


@endsection
@section('content')
<div id="singlewrapper" class="col-md-8">
    

    <div class="content nopad">
        <div class="item-single-wrapper">
            <div class="item-box">
                <div class="item-media text-center">
                    <div id="slider" class="flexslider clearfix">
                        

                        <ul class="slides">
                             <li><img src="{{$product->cover_image}}" alt="" class="img-responsive"></li>
                            @foreach (json_decode($product->preview_image) as $item)
                                <li><img src="{{$item}}" alt="" class="img-responsive"></li>
                            @endforeach
                           
                            {{-- <li><img src="{{$product->preview_image}}" alt="" class="img-responsive"></li>
                            <li><img src="{{asset('/catalog')}}/upload/single_item_03.jpg" alt="" class="img-responsive"></li>
                            <li><img src="{{asset('/catalog')}}/upload/single_item_04.jpg" alt="" class="img-responsive"></li> --}}
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider clearfix">
                        <ul class="slides">

                            <li><img src="{{$product->cover_image}}" alt="" class="img-responsive"></li>
                            @foreach (json_decode($product->preview_image) as $item)
                                <li><img src="{{$item}}" alt="" class="img-responsive"></li>
                            @endforeach
                            {{-- @foreach ($product->preview_image as $item)
                            
                            <li><img src="{{$item->preview_image}}" alt="" class="img-responsive"></li>
                            @endforeach

                            
                            <li><img src="{{$product->preview_image}}" alt="" class="img-responsive"></li> --}}
                            {{-- <li><img src="{{$product->preview_image}}" alt="" class="img-responsive"></li>
                            <li><img src="{{asset('/catalog')}}/upload/single_item_02.jpg" alt="" class="img-responsive"></li>
                            <li><img src="{{asset('/catalog')}}/upload/single_item_03.jpg" alt="" class="img-responsive"></li>
                            <li><img src="{{asset('/catalog')}}/upload/single_item_04.jpg" alt="" class="img-responsive"></li> --}}
                        </ul>
                    </div>  
                </div><!-- end item-media -->

                <div class="item-desc">
                    {{$product->discription}}
                </div><!-- end item-desc -->
            </div><!-- end item-box -->
        </div><!-- end item-single-wrapper -->
    </div><!-- end content -->

    <div class="content-after boxs">
        <div class="row">
            <div class="col-md-12 general-title">
                <h4>Other Bob Items <span class="hidden-xs"><a href="public-profile.html">View all</a></span></h4>
                <hr>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="item-box">
                    <div class="item-media entry">
                        <img src="{{asset('/catalog')}}/upload/item_01.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="item-author">
                                <a href="public-profile.html"><img src="{{asset('/catalog')}}/upload/member_01.jpg" class="img-circle" alt=""> Amanda</a>
                            </div><!-- end author -->
                        </div>
                        <div class="theme__button">
                            <p><a href="single-item.html" title="">$21</a></p>
                        </div>
                    </div><!-- end item-media -->
                    <h4><a href="single-item.html">Weather Forecast</a></h4>
                    <small><a href="single-item.html"><i class="fa fa-eye"></i> 893</a></small>
                    <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 12</a></small>
                </div><!-- end item-box -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-6">
                <div class="item-box">
                    <div class="item-media entry">
                        <img src="{{asset('/catalog')}}/upload/item_02.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="item-author">
                                <a href="public-profile.html"><img src="{{asset('/catalog')}}/upload/member_02.jpg" class="img-circle" alt=""> Bob</a>
                            </div><!-- end author -->
                        </div>
                        <div class="theme__button">
                            <p><a href="single-item.html" title="">$5</a></p>
                        </div>
                    </div><!-- end item-media -->
                    <h4><a href="single-item.html">Google Map Collection</a></h4>
                    <small><a href="single-item.html"><i class="fa fa-eye"></i> 221</a></small>
                    <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 05</a></small>
                </div><!-- end item-box -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-6">
                <div class="item-box">
                    <div class="item-media entry">
                        <img src="{{asset('/catalog')}}/upload/item_03.jpg" alt="" class="img-responsive">
                        <div class="magnifier">
                            <div class="item-author">
                                <a href="public-profile.html"><img src="{{asset('/catalog')}}/upload/member_03.jpg" class="img-circle" alt=""> Selena</a>
                            </div><!-- end author -->
                        </div>
                        <div class="theme__button">
                            <p><a href="single-item.html" title="">$5</a></p>
                        </div>
                    </div><!-- end item-media -->
                    <h4><a href="single-item.html">Podcast App</a></h4>
                    <small><a href="single-item.html"><i class="fa fa-eye"></i> 412</a></small>
                    <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 31</a></small>
                </div><!-- end item-box -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end content after -->
</div><!-- end singlewrapper -->

<div id="sidebar" class="col-md-4">
    <div class="boxes boxs">
        <div class="item-price text-center">
            <p>$21.00</p>
            <em><a href="#">Regular License</a></em>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <hr>
            <small><a href="#"><i class="fa fa-star-o"></i> Add to Favorites</a> &nbsp;&nbsp; <a href="#"><i class="fa fa-heart-o"></i> Like it</a> </small>
            <hr>
            <a href="#" class="btn btn-primary">Add to Cart</a>
            <a href="#" class="btn btn-default">View Demo</a>
            <ul class="list-inline social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div><!-- end price -->
    </div><!-- end boxes -->

    
</div><!-- end sidebar -->


@endsection
@section('scripts')
<script src="{{asset('/catalog')}}/js/flexslider.js"></script>
<script>
    (function($) {
    "use strict";
    $(window).load(function() {
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: false,
            animationLoop: true,
            slideshow: true,
            itemWidth: 92,
            itemMargin: 0,
            asNavFor: '#slider'
        });
   
        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            animationLoop: false,
            slideshow: true,
            sync: "#carousel"
        });
    });
    })(jQuery);
</script>
@endsection