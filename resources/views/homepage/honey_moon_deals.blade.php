<div class="container">
    <h6 class="font-weight-normal text-center">View Our All Tour Packages &</h6>
    <h1 class=" text-center">Honeymoon Special <br>Places</h1>
    <div class="slider row py-5 text-dark">
        <div class="luxury-deals owl-carousel owl-theme">
            @foreach ($slider_tours as $item)
            <div class="item">
                <div class="tour-item rounded position-relative">
                    <div class="luxury-content position-relative pt-5">
                        <div class="deal-image">
                            <div class="luxury-corner-ribbon sticky shadow font-weight-bold">{{$item->price}}</div>
                            <img src="{{ asset('uploads')}}/{{$item->GetImage($item->image_id)->file_path}}" alt="" width="100%" height="100%" class="cm-border-radius">
                        </div>
                        <h5 class="pl-3 font-weight-bold">{{$item->address}}</h5>
                        <p class="pl-3">{{$item->Getlocation($item->location_id)->name}}</p>
                        <div class="d-flex pl-3">
                            <div class="pr-3">
                                <img src="{{ asset('front-assets/img/calendar.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                <span>{{$item->duration}} Days</span>
                            </div>
                            <div class="">
                                <img src="{{ asset('front-assets/img/user.svg')}}" alt="" class="cm-icon-width d-inline-block">
                                <span>{{$item->max_people}} Person</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
$(document).ready(function()
    $('.luxury-deals').owlCarousel({
        center: false,
        items:2,
        loop:false,
        nav:true,
        dots:false,
        margin:10,
        responsive:{
            600:{
                items:3
            }
        }
    });
})

    </script>
