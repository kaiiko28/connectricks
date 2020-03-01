@extends('layouts.app')



@section('content')

<!--Main Slider-->
<section id="home" class="position-relative">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark" data-alias="classic4export" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_main" class="rev_slider fullwidthabanner white" data-version="5.4.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset ('/')}}img/bg1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="overlay overlay-dark opacity-6"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">The Ultimate</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-bold whitecolor text-center">Creative Business</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">In Market</h1>
                    </div>
                    <!-- LAYER NR. 4 -->
                    {{-- <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-xlight text-center">The Best Multipurpose Multi Page Template in Market</h4>
                    </div> --}}
                </li>
                <!-- SLIDE 2 -->
                <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="02">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset ('/')}}img/bg2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="overlay overlay-dark opacity-6"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">Let's Create</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-bold whitecolor text-center">Deep Creativity</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">In Market</h1>
                    </div>
                    <!-- LAYER NR. 4 -->
                    {{-- <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-xlight text-center">Responsive and Retina Ready for All Devices</h4>
                    </div> --}}
                </li>
                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="03">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset ('/')}}img/bg3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="overlay overlay-dark opacity-7"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">We Make</h1>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-bold whitecolor text-center">Inspired Design</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    {{-- <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1500"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">Our Trax</h1>
                    </div> --}}
                    <!-- LAYER NR. 4 -->
                    {{-- <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']"
                         data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="2000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-xlight text-center">Is a New Design Studio founded in NewYork</h4>
                    </div> --}}
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Main Slider ends -->
<!--Some Services-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="services-slider" class="owl-carousel">
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-clipboard"></i></span>
                        <h4 class="bottom10 text-nowrap"><a href="javascript:void(0)">Easy To Comunicate</a></h4>
                        <p>Product owner is easy to talk to. User can reach them in social media or by our page</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-laptop"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">Product Details</a></h4>
                        <p>Aside from Facebook page, you can also see the description of the product before redirecting to purchase</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-globe"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">Full Support</a></h4>
                        <p>Members are very attentive to any question and would guide you in the process</p>
                    </div>
                </div>
                {{-- <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-edit"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">Clean Coded</a></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                    </div>
                </div>
                <div class="item">
                    <div class="service-box">
                        <span class="bottom25"><i class="fa fa-globe"></i></span>
                        <h4 class="bottom10"><a href="javascript:void(0)">SEO Optimized</a></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!--Some Services ends-->
<!--Some Feature -->
<section id="about" class="single-feature padding mt-n5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30">Lets take your <span class="defaultcolor">Earnings</span> to Next Level</h2>
                </div>
                <p class="bottom35">Connectrics has different ideas in earning online. Product, Invites, Bonuses, Referals and soon projects. Connectrics goal is to utilize every household need in the near future in a single device. For the meantime, Connectrics is focusing on its Clothing line. It also includes here the customization of every products.</p>
                
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="http://themesindustry.com/html/trax-2020/images/awesome-feature.png"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->
<!-- WOrk Process-->
<section id="our-process" class="padding bgdark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                    <span>Business is not just earning from you </span>
                    <h2 class="font-normal">Ideas of Business</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="process-wrapp">
                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                    <span class="pro-step bottom20">01</span>
                    <p class="fontbold bottom20">Clothings</p>
                    <p class="mt-n2 mt-sm-0">Connectrics is a clothing store that accepting custom designs and also selling their own creation</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="400ms">
                    <span class="pro-step bottom20">02</span>
                    <p class="fontbold bottom20">Shoes Idea</p>
                    <p class="mt-n2 mt-sm-0">Aside from clothing connectrics also accepting shoe printing</p>
                </li>
                <li class="whitecolor wow fadeIn active" data-wow-delay="500ms">
                    <span class="pro-step bottom20">03</span>
                    <p class="fontbold bottom20">In site Earning</p>
                    <p class="mt-n2 mt-sm-0">Connectrics System has its own earning dashboard where allow user to earn.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="600ms">
                    <span class="pro-step bottom20">04</span>
                    <p class="fontbold bottom20">Invites</p>
                    <p class="mt-n2 mt-sm-0">When you are a official member of connectrics your not stock in in site earning but also inviting friend could make you earn too.</p>
                </li>
                <li class="whitecolor wow fadeIn" data-wow-delay="700ms">
                    <span class="pro-step bottom20">05</span>
                    <p class="fontbold bottom20">Be a Reseller</p>
                    <p class="mt-n2 mt-sm-0">Why not focus on our product? being a reseller would give a great discount for every bundle purchase</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--WOrk Process ends-->
<!-- Mobile Apps -->
<section id="our-apps" class="padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor text-center text-md-left">Connectrics Insite Earning</span>
                    <h2 class="darkcolor font-normal text-center text-md-left">Mobile View Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center" id="app-feature">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-right">
                    <div class="feature-item mt-3 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="icon"><i class="fas fa-cog"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Earning Options</span>
                            </h3>
                            <p>Earn in different ways</p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInLeft" data-wow-delay="350ms">
                        <div class="icon"><i class="fas fa-edit"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">Customization</span>
                            </h3>
                            <p>Custom Request Capability</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="app-image top30">
                    <div class="app-slider-lock-btn"></div>
                    <div class="app-slider-lock">
                        <img src="{{asset('img/mobile/1.png?v=1')}}" alt="">
                    </div>
                    <div id="app-slider" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{asset('img/mobile/2.png?v=1')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('img/mobile/3.png?v=1')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('img/mobile/4.png?v=1')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('img/mobile/5.png?v=1')}}" alt="">
                        </div>
                    </div>
                    <img src="http://themesindustry.com/html/trax-2020/images/iphone.png?v=1" alt="image">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-left">
                    <div class="feature-item mt-3 wow fadeInRight" data-wow-delay="300ms">
                        <div class="icon"><i class="fas fa-wallet"></i></div>
                        <div class="text">
                            <h3  class="bottom15">
                                <span class="d-inline-block">Powerful Wallet</span>
                            </h3>
                            <p>Encashment support by gcash</p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInRight" data-wow-delay="350ms">
                        <div class="icon"><i class="far fa-folder-open"></i></div>
                        <div class="text">
                            <h3  class="bottom15">
                                <span class="d-inline-block">Accessible </span>
                            </h3>
                            <p>Easy access any time anywhere</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mobile Apps ends-->
<!-- Counters -->
<section id="bg-counters" class="padding bg-counters parallax">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor  top10 bottom10">
                    <span class="count_nums font-light" data-to="2010" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="whitecolor top20 bottom20 font-light title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters whitecolor top10 bottom10">
                    <span class="count_nums font-light" data-to="895" data-speed="2500"> </span>
                </div>
                <h3 class="font-light whitecolor top20">Since We Started</h3>
            </div>
        </div>
    </div>
</section>
<!-- Counters ends-->
<!--Pricing Start-->
{{-- <section id="pricing" class="padding bglight">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor">Quisque tellus risus, adipisci </span>
                    <h2 class="font-normal heading_space_half"> Pricing Offers </h2>
                </div>
            </div>
            <div class="col-12 text-center ">
                <div class="price-toggle-wrapper heading_space">
                    <span class="Pricing-toggle-button month active">Monthly</span>
                    <span class="Pricing-toggle-button year">Yearly</span>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme no-dots" id="price-slider">
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated sale" data-wow-delay="300ms" data-sale="30">
                        <h3 class="font-light darkcolor">Basic</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$9.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li class="price-not">40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated active selected" data-wow-delay="380ms">
                        <h3 class="font-light darkcolor">Popular</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$19.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li class="price-not">Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated" data-wow-delay="460ms">
                        <h3 class="font-light darkcolor">Enterprise</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$29.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li class="price-not">10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-md-12">
                    <div class="pricing-item wow fadeInUp animated" data-wow-deeay="400ms">
                        <h3 class="font-light darkcolor">Ultimate</h3>
                        <p class="bottom30">The standard version</p>
                        <div class="pricing-price darkcolor"><span class="pricing-currency">$49.95</span> /<span class="pricing-duration">month</span></div>
                        <ul class="pricing-list">
                            <li>Support forum</li>
                            <li>Free hosting</li>
                            <li>40MB of storage space</li>
                            <li>Social media integration</li>
                            <li>10GB of storage space</li>
                        </ul>
                        <a class="button" href="javascript:void(0)">Choose plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--Pricing ends-->
<!-- Gallery -->
<section id="portfolio" class="position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="300ms">
                    <span class="defaultcolor"> Let's Explore Out </span>
                    <h2 class="font-normal darkcolor heading_space_half"> Our Works </h2>
                </div>
                <div class="col-md-6 offset-md-3 heading_space_half">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores omnis provident quam reiciendis voluptatum.</p>
                </div>
            </div>
            <div class="col-lg-12">
                
                <div id="mosaic-filter" class="cbp-l-filters bottom30 wow fadeIn text-center" data-wow-delay="350ms">
                    
                    <div data-filter="*" class="cbp-filter-item">
                        <span>All</span>
                    </div>
                    @foreach ($category as $item)
                        {{-- <p>{{ $item->category}}</p> --}}

                        <div data-filter=".{{ $item->category}}" class="cbp-filter-item">
                            <span>{{ $item->category}}</span>
                        </div>
                    @endforeach
                    
                    {{-- <div data-filter=".design" class="cbp-filter-item">
                        <span>Design</span>
                    </div>
                    <div data-filter=".brand" class="cbp-filter-item">
                        <span>Brand</span>
                    </div>
                    <div data-filter=".graphics" class="cbp-filter-item">
                        <span>Graphics</span>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-12">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                    <!--Item 1-->
                    @foreach ($product as $products)

                        <div class="cbp-item brand {{$products->category}}">
                            <img src="{{$products->cover_image}}" alt="">
                            <div class="gallery-hvr whitecolor">
                                <div class="center-box">
                                    <a href="{{$products->cover_image}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                    <a href="{{route('shop.single') . '?id=' . $products->id}}" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                    <h4 class="w-100">Sweet Cup</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    {{-- <!--Item 2-->
                    <div class="cbp-item brand graphics design">
                        <img src="http://themesindustry.com/html/trax-2020/images/gallery-7.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="http://themesindustry.com/html/trax-2020/images/gallery-7.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="javascript:void(0)" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Minimal Things</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 3-->
                    <div class="cbp-item design digital graphics">
                        <img src="http://themesindustry.com/html/trax-2020/images/gallery-11.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="http://themesindustry.com/html/trax-2020/images/gallery-11.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="javascript:void(0)" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Semantic Collection</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 4-->
                    <div class="cbp-item brand graphics">
                        <img src="http://themesindustry.com/html/trax-2020/images/gallery-6.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="http://themesindustry.com/html/trax-2020/images/gallery-6.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="javascript:void(0)" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Wall Clock</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 5-->
                    <div class="cbp-item graphics design design">
                        <img src="http://themesindustry.com/html/trax-2020/images/gallery-8.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="http://themesindustry.com/html/trax-2020/images/gallery-8.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="javascript:void(0)" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Reading Content</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 6-->
                    <div class="cbp-item brand digital design">
                        <img src="http://themesindustry.com/html/trax-2020/images/gallery-9.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="http://themesindustry.com/html/trax-2020/images/gallery-9.jpg" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <a href="javascript:void(0)" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Great Objects</h4>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <!--Load more itema from another html file using ajax-->
                    <a class="btn btn-info" href="{{route('shop')}}">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery ends -->
<!--Blog-->
{{-- <section class="bglight padding" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-title darkcolor wow fadeInUp" data-wow-delay="100ms">
                    <span class="defaultcolor">Read Out Our</span>
                    <h2 class="font-normal darkcolor heading_space_half"> Latest Blog </h2>
                </div>
                <div class="col-md-6 offset-md-3 heading_space">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores omnis provident quam reiciendis voluptatum.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="news_item shadow wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-img">
                        <a class="image" href="http://themesindustry.com/html/trax-2020/blog-1.html">
                            <img src="http://themesindustry.com/html/trax-2020/images/blog-1.jpg" alt="Latest News" class="img-responsive">
                        </a>
                    </div>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="http://themesindustry.com/html/trax-2020/blog-1.html">Next Large Social Network</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Jan 14</a></li>
                            <li><a href="#."> <i class="far fa-user"></i>Peter</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>7</a></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing industry. Lorem has been dummy text ever since the 1500s...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="news_item shadow wow fadeInUp" data-wow-delay="300ms">
                    <div class="blog-img">
                        <div class="owl-carousel owl-theme owl-blog-item">
                            <div class="image item">
                                <img src="http://themesindustry.com/html/trax-2020/images/blog-4.jpg" alt="image">
                            </div>
                            <div class="image item">
                                <img src="http://themesindustry.com/html/trax-2020/images/blog-3.jpg" alt="image">
                            </div>
                            <div class="image item">
                                <img src="http://themesindustry.com/html/trax-2020/images/blog-2.jpg" alt="image">
                            </div>
                            <div class="image item">
                                <img src="http://themesindustry.com/html/trax-2020/images/blog-6.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="http://themesindustry.com/html/trax-2020/blog-1.html">The Art of Finding Great Ideas</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>Feb 19</a></li>
                            <li><a href="#."> <i class="far fa-user"></i>John</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>9</a></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing industry. Lorem has been dummy text ever since the 1500s...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="news_item shadow mb-0 wow fadeInUp" data-wow-delay="400ms">
                    <div class="blog-img">
                        <a data-fancybox="" href="http://themesindustry.com/html/trax-2020/video/video.mp4">
                            <div class="play-hvr">
                                <div class="play-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </a>
                        <div class="image">
                            <img src="http://themesindustry.com/html/trax-2020/images/blog-5.jpg" alt="Latest News" class="img-responsive">
                        </div>
                    </div>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="http://themesindustry.com/html/trax-2020/blog-1.html">3 Tips for Creating Your Own Blog</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>May 21</a></li>
                            <li><a href="#."> <i class="far fa-user"></i>David</a></li>
                            <li><a href="#."><i class="far fa-comment-dots"></i>4</a></li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing industry. Lorem has been dummy text ever since the 1500s...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--Blog ends-->
<!--contact us-->
<section id="contact" class="position-relative padding_bottom_half">
    <div class="container whitebox padding_bottom_half">
        <div class="padding_top">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp mt-n3" data-wow-delay="300ms">
                    <span class="defaultcolor">Quisque tellus risus</span>
                    <div class="heading-title bottom25 darkcolor">
                        <h2 class="font-normal darkcolor"> Contact Us </h2>
                    </div>
                    <div class="col-md-6 offset-md-3 heading_space">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores omnis provident quam reiciendis voluptatum.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 order-md-2 text-center text-md-left">
                    <div class="contact-meta pl-0 pl-sm-5 wow fadeInRight" data-wow-delay="300ms">
                        <div class="heading-title heading_small">
                            {{-- <span class="defaultcolor mb-2">Connectrics Office</span> --}}
                            <h3 class="darkcolor font-normal">Our Valenzuela Office</h3>
                        </div>
                        <div class="my-3">
                            <p class="bottom10">Address: Malinta Exit, Valenzuela City</p>
                            <p class="bottom10">09123456789</p>
                            <p class="bottom10">09987654321</p>
                            <p class="bottom10">Mon-Fri: 9am-5pm</p>
                        </div>
                        <ul class="social-icons no-border mb-4 mb-md-0 wow fadeInUp" data-wow-delay="300ms">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="heading-title  wow fadeInLeft" data-wow-delay="300ms">
                        <form class="getin_form" onsubmit="return false;">
                            <div class="row px-2">
                                <div class="col-md-12 col-sm-12" id="result1"></div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name1" class="d-none"></label>
                                        <input class="form-control" id="name1" type="text" placeholder="Name" required="" name="userName">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email1" class="d-none"></label>
                                        <input class="form-control" type="email" id="email1" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="message1" class="d-none"></label>
                                        <textarea class="form-control" id="message1" placeholder="Message" required="" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" id="submit_btn1" class="button gradient-btn w-100">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact us end-->
@endsection
