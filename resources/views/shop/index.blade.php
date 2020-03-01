@extends('layouts.shop')

@section('styles')
<style>
    .item-media img {
        height: 242px;
        width: auto;
        margin: auto;
    }
</style>
@endsection

@section('content')

    @if (count($product) > 0)
    @foreach ($product as $item)
        <div class="col-md-3 col-sm-6">
            <div class="item-box">
                <div class="item-media entry">
                    <img src="{{$item->cover_image}}" alt="" class="img-responsive">
                    {{-- <div class="magnifier">
                        <div class="item-author">
                            <a href="public-profile.html"><img src="{{ asset('/catalog') }}/upload/member_01.jpg" class="img-circle" alt=""> {{$item->discription}}</a>
                        </div><!-- end author -->
                    </div> --}}
                    <div class="theme__button">
                        <p><a href="{{route('shop.single') . '?id=' . $item->id}}" title="">{{$item->price}}</a></p>
                    </div>
                </div><!-- end item-media -->
                <h4><a href="single-item.html">{{$item->name}}</a></h4>
            </div><!-- end item-box -->
        </div><!-- end col -->
    @endforeach

    @else
    <div class="col-sm-12 text-center">
    <h1>No Data for a moment</h1>
    </div>
    @endif
@endsection


@section('scripts')
    
<script src="{{ asset('/catalog') }}/js/custom.js"></script>
<script src="{{ asset('/catalog') }}/js/jquery.infinitescroll.js"></script>
<script src="{{ asset('/catalog') }}/js/manual-trigger.js"></script>
<script>
$('.content').infinitescroll({
    navSelector     : "#next:last",
    nextSelector    : "a#next:last",
    itemSelector    : ".content .row",
    debug           : false,
    dataType        : 'html',
    maxPage         : 3,
    path: function(index) {
        return "index" + index + ".html";
    }
}, function(newElements, data, url){
        
});
</script>
@endsection
