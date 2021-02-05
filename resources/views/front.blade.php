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



        <section class="about-banner section-padding">
            <div class="container text-white text-md-left text-sm-center">
                <div class="row">
                    <div class="col-md-6 col-sm-12 py-5 pr-5">
                        <h6 class="font-weight-normal">Amazing Tours And Fun</h6>
                        <h1>About <br> Travelo Moon</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, cupiditate sint fuga placeat voluptate ullam architecto totam eligendi esse modi!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum inventore error, ea expedita officia quis repudiandae perferendis earum consequuntur natus et iusto incidunt tempore? Quia itaque maxime sunt error labore.</p>
                        <button type="button" class="btn btn-success btn-sm">LEARN MORE</button>
                    </div>
                    <div class="col-md-6 col-sm-12 py-5">
                        <div class="cm-shape">
                            <img src="{{ asset('front-assets/img/pexels-andrea-piacquadio-3760257.jpg')}}" alt=""  width="100%">
                        </div>
                        <img src="{{ asset('front-assets/img/dots-pattern.png')}}" alt="" class="dot-pattern">
                    </div>
                </div>
            </div>
        </section>
        <section class="choose-us section-padding">
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
        </section>
        <section id="package-masonary" class="section-padding">
            <div class="container-fluid">
                <h1 class="text-center">Discribe Your Experiences</h1>
                <p class="text-center text-muted px-md-5  sub-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ullam ratione culpa aliquam possimus minus.</p>
                <table class="" id="banner-table">
                    <tr>
                        <td class="first-banner">
                            <!-- <img src="/img/164645_v2.jpeg" alt="" width="100%"> -->
                            <p>PlaceName</p></td>
                        <td class="second-banner" colspan="2" rowspan="2"><p>PlaceName</p></td>
                        <td class="third-banner"><p>PlaceName</p></td>
                        <td class="forth-banner"><p>PlaceName</p></td>
                        <td class="fifth-banner"><p>PlaceName</p></td>
                    </tr>
                    <tr>
                        <td class="sixth-banner" rowspan="2"><p>PlaceName</p></td>
                        <td class="" colspan="2"><h1>Holiday<br> Experiences</h1></td>
                        <td class="eighth-banner" rowspan="2"><p>PlaceName</p></td>
                        <!-- <td rowspan="2"><</td> -->
                    </tr>
                    <tr>
                        <td class="ninth-banner"><p>PlaceName</p></td>
                        <td class="tenth-banner" colspan="2"><p>PlaceName</p></td>
                        <td class="eleventh-banner"><p>PlaceName</p></td>
                    </tr>
                </table>
                </div>
            </div>
        </section>
        <section class="trip-plan">
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
        </section>
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
            </div>
        </section>
        <section class="honeymoon section-padding">
           @include('homepage.honey_moon_deals')
        </section>
        <section class="perfect-place section-padding bg-grey">
            <div class="container-fluid">
                <h1 class=" text-center">Find The Perfect Escape</h1>
                <h6 class="font-weight-normal text-center">Choose the Destination Just Right For Your Vacation</h6>
                <div class="row mt-5 ">
                    <div class=" col-md-4 col-sm-12  side-img">
                        <img src="{{ asset('front-assets/img/pexels-asad-photo-maldives-3601426.jpg')}}" alt="" width="100%" height="100%">
                        <p class="centered">PlaceName</p>
                        <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
                        <!-- <div class="caption-img "><p>PlaceName</p></div> -->
                    </div>
                    <div class="col-md-4 col-sm-12 py-2 centerimage">
                        <img src="{{ asset('front-assets/img/pexels-asad-photo-maldives-3601426.jpg')}}" alt="" width="100%" height="100%">
                        <p class="centered">PlaceName</p>
                    </div>
                    <div class="col-md-4 col-sm-12 side-img">
                        <img src="{{ asset('front-assets/img/pexels-asad-photo-maldives-3601426.jpg')}}" alt="" width="100%" height="100%">
                        <p class="centered">PlaceName</p>
                    </div>
                </div>
            </div>
        </section>
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

@endsection
