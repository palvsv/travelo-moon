@extends('front_layout')

@section('content')
        <section class="home-banner">
            <div class="container">
                <div class="banner-content">
                    <h1> <span class="primary-color">It's time for new</span></h1>
                    <h1 class="slider-big-text">Adventures</h1>
                    <div class="search-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"> Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"> Tours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"> Rentals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"> Staycations</a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <input class=" form-control tour-search-field py-2 border-right-0 border" type="text" name="search" placeholder="Search Destinations, Tours, Activities"  autocomplete="off" spellcheck="false" />
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <input class="tour-search-field" type="text" name="search" placeholder="Search Destinations, Tours, Activities"  autocomplete="off" spellcheck="false" />
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <input class="tour-search-field" type="text" name="search" placeholder="Search Destinations, Tours, Activities"  autocomplete="off" spellcheck="false" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="section-padding">
            <div class="container">
                <div class="text-center">
                    <h6>View Our All Tour Packages &</h6>
                    <h1>Most Beautiful Places of The World</h1>
                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate totam cum, suscipit corrupti ducimus culpa pariatur ab architecto dolores quam quisquam assumenda consectetur consequatur ex nisi, non iste veniam quaerat.</p>
                </div>
                <div class="slider row py-5 text-dark">
                    <div class="tour-packages owl-carousel owl-theme">
                        <div class="item">
                            <div class="tour-item rounded position-relative">
                                <div class="tour-content position-relative">
                                    <div class="timage cm-timage-position">
                                        <div class="corner-ribbon sticky shadow font-weight-bold">6,000</div>
                                        <img src="{{ asset('front-assets/img/pexels-visionpic-net-2166559.jpg')}}" alt="" width="100%" height="100%" class="cm-border-radius">
                                    </div>
                                    <h5 class="pl-3">Place Name</h5>
                                    <p class="pl-3">Country / State</p>
                                    <div class="d-flex pl-3">
                                        <div class="pr-3">
                                            <img src="{{ asset('front-assets/img/calendar.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>6 Days</span>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('front-assets/img/user.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>2 Person</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm ml-3 btn-position">BOOK NOW</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tour-item rounded position-relative">
                                <div class="tour-content position-relative">
                                    <div class="timage cm-timage-position">
                                        <div class="corner-ribbon sticky shadow font-weight-bold">6,000</div>
                                        <img src="{{ asset('front-assets/img/pexels-visionpic-net-2166559.jpg')}}" alt="" width="100%" height="100%" class="cm-border-radius">
                                    </div>
                                    <h5 class="pl-3">Place Name</h5>
                                    <p class="pl-3">Country / State</p>
                                    <div class="d-flex pl-3">
                                        <div class="pr-3">
                                            <img src="{{ asset('front-assets/img/calendar.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>6 Days</span>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('front-assets/img/user.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>2 Person</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm ml-3 btn-position">BOOK NOW</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tour-item rounded position-relative">
                                <div class="tour-content position-relative">
                                    <div class="timage cm-timage-position">
                                        <div class="corner-ribbon sticky shadow font-weight-bold">6,000</div>
                                        <img src="{{ asset('front-assets/img/pexels-visionpic-net-2166559.jpg')}}" alt="" width="100%" height="100%" class="cm-border-radius">
                                    </div>
                                    <h5 class="pl-3">Place Name</h5>
                                    <p class="pl-3">Country / State</p>
                                    <div class="d-flex pl-3">
                                        <div class="pr-3">
                                            <img src="{{ asset('front-assets/img/calendar.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>6 Days</span>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('front-assets/img/user.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>2 Person</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm ml-3 btn-position">BOOK NOW</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tour-item rounded position-relative">
                                <div class="tour-content position-relative">
                                    <div class="timage cm-timage-position">
                                        <div class="corner-ribbon sticky shadow font-weight-bold">6,000</div>
                                        <img src="{{ asset('front-assets/img/pexels-visionpic-net-2166559.jpg')}}" alt="" width="100%" height="100%" class="cm-border-radius">
                                    </div>
                                    <h5 class="pl-3">Place Name</h5>
                                    <p class="pl-3">Country / State</p>
                                    <div class="d-flex pl-3">
                                        <div class="pr-3">
                                            <img src="{{ asset('front-assets/img/calendar.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>6 Days</span>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('front-assets/img/user.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>2 Person</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm ml-3 btn-position">BOOK NOW</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tour-item rounded position-relative">
                                <div class="tour-content position-relative">
                                    <div class="timage cm-timage-position">
                                        <div class="corner-ribbon sticky shadow font-weight-bold">6,000</div>
                                        <img src="{{ asset('front-assets/img/pexels-visionpic-net-2166559.jpg')}}" alt="" width="100%" height="100%" class="cm-border-radius">
                                    </div>
                                    <h5 class="pl-3">Place Name</h5>
                                    <p class="pl-3">Country / State</p>
                                    <div class="d-flex pl-3">
                                        <div class="pr-3">
                                            <img src="{{ asset('front-assets/img/calendar.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>6 Days</span>
                                        </div>
                                        <div class="">
                                            <img src="{{ asset('front-assets/img/user.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                            <span>2 Person</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm ml-3 btn-position">BOOK NOW</button>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section> --}}

        <section class="section-padding">
            @include('homepage.alltour')
        </section>


        @if(!empty($abouthome))
        <section class="about-banner section-padding">
            <div class="container text-white text-md-left text-sm-center">
                <div class="row">
                    <div class="col-md-6 col-sm-12 py-5 pr-5">
                        <h6 class="font-weight-normal">{{$abouthome->subtitle}}</h6>
                        <h1>{{$abouthome->title}}</h1>
                        <p>{!! $abouthome->description !!}</p>
                        <button type="button" class="btn btn-success btn-sm">{{$abouthome->button_text}}</button>
                    </div>
                    <div class="col-md-6 col-sm-12 py-5">
                        <div class="cm-shape">
                            @php
                            $path = $abouthome->GetImagePath($abouthome->image_id);
                            @endphp
                            <img src="{{ asset('uploads')}}/{{$path->file_path}}" alt=""  width="100%">
                        </div>
                        <img src="{{ asset('front-assets/img/dots-pattern.png')}}" alt="" class="dot-pattern">
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if(!empty($dataWhy))
        <section class="choose-us section-padding">
            <div class="container">
                <h6 class="font-weight-normal text-center">{!! $dataWhy->subtitle !!}</h6>
                <h1 class=" text-center">{!! $dataWhy->title !!}</h1>
                <div class="row">
                    <div class="col-md-7 col-sm-12 py-2">
                        <img src="{{ asset('uploads')}}/{{$dataWhy->GetImagePath($dataWhy->featured_image)->file_path}}" alt="" width="100%" height="100%">
                    </div>
                    <div class="col-md-5 col-sm-12 cm-content-padding cm-detail">
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('uploads')}}/{{$dataWhy->GetImagePath($dataWhy->image_one)->file_path}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>{{$dataWhy->item_one}}</h5>
                                <p class="text-muted">{!! $dataWhy->content_one !!}</p>
                            </div>
                        </div>
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('uploads')}}/{{$dataWhy->GetImagePath($dataWhy->image_two)->file_path}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>{{$dataWhy->item_two}}</h5>
                                <p class="text-muted">{!! $dataWhy->content_two !!}</p>
                            </div>
                        </div>
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('uploads')}}/{{$dataWhy->GetImagePath($dataWhy->image_three)->file_path}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>{{$dataWhy->item_three}}</h5>
                                <p class="text-muted">{!! $dataWhy->content_three !!}</p>
                            </div>
                        </div>
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('uploads')}}/{{$dataWhy->GetImagePath($dataWhy->image_four)->file_path}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>{{$dataWhy->item_four}}</h5>
                                <p class="text-muted">{!! $dataWhy->content_four !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <section id="package-masonary" class="section-padding">
            <div class="container-fluid">
                <h1 class="text-center">Discribe Your Experiences</h1>
                <p class="text-center text-muted px-md-5  sub-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ullam ratione culpa aliquam possimus minus.</p>
                <table class="" id="banner-table">
                    @foreach ($home_holiday as $hh)
                        @php
                            $datahh = $hh;
                        @endphp
                    @endforeach
                    <tr>

                        <td class="first-banner" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(1)['image'] }})"><p>{{$datahh->GetHolidayData(1)['place'] }}</p></td>
                        <td class="second-banner" colspan="2" rowspan="2" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(2)['image'] }})"><p>{{$datahh->GetHolidayData(2)['place'] }}</p></td>
                        <td class="third-banner" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(3)['image'] }})"><p>{{$datahh->GetHolidayData(3)['place'] }}</p></td>
                        <td class="forth-banner" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(4)['image'] }})"><p>{{$datahh->GetHolidayData(4)['place'] }}</p></td>
                        <td class="fifth-banner" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(5)['image'] }})"><p>{{$datahh->GetHolidayData(5)['place'] }}</p></td>
                    </tr>
                    <tr>
                        <td class="sixth-banner" rowspan="2" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(6)['image'] }})"><p>{{$datahh->GetHolidayData(6)['place'] }}</p></td>
                        <td class="" colspan="2" ><h1>Holiday<br> Experiences</h1></td>
                        <td class="eighth-banner" rowspan="2" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(7)['image'] }})"><p>{{$datahh->GetHolidayData(7)['place'] }}</p></td>
                        <!-- <td rowspan="2"><</td> -->
                    </tr>
                    <tr>
                        <td class="ninth-banner" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(8)['image'] }})"><p>{{$datahh->GetHolidayData(8)['place'] }}</p></td>
                        <td class="tenth-banner" colspan="2" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(9)['image'] }})"><p>{{$datahh->GetHolidayData(9)['place'] }}</p></td>
                        <td class="eleventh-banner" style="background-image: url({{asset('uploads')}}/{{ $datahh->GetHolidayData(10)['image'] }})"><p>{{$datahh->GetHolidayData(10)['place'] }}</p></td>
                    </tr>
                </table>
                </div>
            </div>
        </section>
        {{-- <section class="trip-plan">
            <div class="container position-relative text-white py-5">
                <h2 class="text-center py-5">Plan Your Trip With Us ?</h2>
                <div class="row d-flex">
                    <div class="col-md-4 col-sm-12 px-3 ">
                        <span class="">Destination</span>
                        <select class="form-control form-control-lg rounded-0 my-3 text-muted border-0">
                            <option class="">Select Location</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-12 px-3">
                        <span class="">Check In Date</span>
                        <select class="form-control form-control-lg rounded-0 my-3 text-muted border-0">
                            <option>Large select</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-12 px-3">
                        <span class="">Check Out Date</span>
                        <select class="form-control form-control-lg rounded-0 my-3 text-muted border-0">
                            <option>Large select</option>
                        </select>
                    </div>
                    <button type="button" class="cta-btn btn btn-secondary btn-sm col-md-2 col-sm-12 my-3">BOOK NOW</button>
                </div>
            </div>
        </section> --}}
        <section class="section-padding">
                @include('homepage.luxury_deals')
        </section>
        <section class="our-client section-padding">
            <div class="container text-white">
                <div class="position-relative">
                    <h6 class="text-center">Happy Clients</h6>
                    <h1 class="text-center">What Our Client Say</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 py-5 pr-5">
                      <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('front-assets/img/pexels-andrea-piacquadio-3760257.jpg')}}" alt="" width="100%" height="33.3333%" class="d-block">
                                <img src="{{ asset('front-assets/img/pexels-andrea-piacquadio-3760257.jpg')}}" alt="" width="100%" height="33.3333%" class="py-2 d-block">
                                <img src="{{ asset('front-assets/img/pexels-andrea-piacquadio-3760257.jpg')}}" alt="" width="100%" height="33.3333%" class="d-block">
                            </div>
                            <div class="col-9 p-0">
                                <img src="{{ asset('front-assets/img/pexels-te-lensfix-1371360.jpg')}}" alt="" width="100%" class="p-0">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 py-5 align-self-center">
                        <p class="font-weight-light font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quidem, atque consequatur deleniti sapiente hic quod tempora asperiores possimus ratione facilis accusamus, nihil, vitae alias eligendi labore qui minima molestiae.</p>
                        <h5>- Client Name</h5>
                        <p class="font-weight-normal">something.com</p>
                    </div>
                </div>
                    <div class="slider slider-for">
                        <div>
                        <img src="http://placehold.it/350x100?text=1">
                        </div>
                        <div>
                        <img src="http://placehold.it/350x100?text=2">
                        </div>
                        <div>
                        <img src="http://placehold.it/350x100?text=3">
                        </div>
                        <div>
                            <img src="http://placehold.it/350x100?text=4">
                            </div>
                  </div>
                  <div class="slider slider-nav">
                    <div>
                    <img src="http://placehold.it/140x89?text=1">
                    </div>
                    <div>
                    <img src="http://placehold.it/140x89?text=2">
                    </div>
                    <div>
                    <img src="http://placehold.it/140x89?text=3">
                    </div>
                    <div>
                        <img src="http://placehold.it/140x89?text=4">
                        </div>
              </div>
            </div>
        </section>
        <section class="honeymoon section-padding">
           @include('homepage.honey_moon_deals')
        </section>
        @if(!empty($perfectPlace))
        <section class="perfect-place section-padding bg-grey">
            @include('homepage.perfect_place')
        </section>
        @endif
        {{-- <section class="choose-us section-padding">
            <div class="container">
                <h6 class="font-weight-normal text-center">We Plan Your Trip Beautiful</h6>
                <h1 class=" text-center">Why Choose Us?</h1>
                <div class="row">
                    <div class="col-md-7 col-sm-12 py-2">
                        <img src="{{ asset('front-assets/img/pngfuel.com(3).png')}}" alt="" width="100%" height="100%">
                    </div>
                    <div class="col-md-5 col-sm-12 cm-content-padding cm-detail">
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('front-assets/img/detached.svg')}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>Luxury & Comfort</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia, iste maxime.</p>
                            </div>
                        </div>
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('front-assets/img/shield.svg')}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>Safety & Security</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia, iste maxime.</p>
                            </div>
                        </div>
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('front-assets/img/open-24-hours.svg')}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>24 Hours Support</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia, iste maxime.</p>
                            </div>
                        </div>
                        <div class="row d-flex py-2">
                            <div class="cm-luxury col-3">
                                <img src="{{ asset('front-assets/img/airplane.svg')}}" alt="">
                            </div>
                            <div class="col-9">
                                <h5>Modern Airecraft</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda mollitia, iste maxime.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


@stack('scripts')
        <script>
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true

});
        </script>
@endsection
