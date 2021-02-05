


            <div class="container">
                <div class="text-center">
                    <h6>View Our All Tour Packages &</h6>
                    <h1>Most Beautiful Places of The World</h1>
                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate totam cum, suscipit corrupti ducimus culpa pariatur ab architecto dolores quam quisquam assumenda consectetur consequatur ex nisi, non iste veniam quaerat.</p>
                </div>
                <div class="slider row py-5 text-dark">
                    <div id="tour-packages" class="tour-packages owl-carousel owl-theme">
                        @foreach ($slider_tours as $key=>$item)
                        <div class="item">
                            <div class="tour-item rounded position-relative">
                                <div class="tour-content position-relative">
                                    <div class="timage cm-timage-position">
                                        <div class="corner-ribbon sticky shadow font-weight-bold">{{$item->price}}</div>
                                        <img src="{{ asset('uploads')}}/{{$item->GetImage($item->image_id)->file_path}}" alt="" width="100%" height="100%" class="cm-border-radius">
                                    </div>
                                    <h5 class="pl-3">{{$item->title}}</h5>
                                    <p class="pl-3"> {{$item->Getlocation($item->location_id)->name}}</p>
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
                                <a href="/tour/{{$item->slug}}" class="btn btn-success btn-sm ml-3 btn-position">BOOK NOW</a>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>


@push('scripts')
<script>
$(document).ready(function()
    $('.tour-packages').owlCarousel({
    center: false,
    items:2,
    loop:false,
    nav:true,
    dots:false,
    margin:10,
    responsive:{
        600:{
            items:4
        }
    }});
});
</script>
@endpush
