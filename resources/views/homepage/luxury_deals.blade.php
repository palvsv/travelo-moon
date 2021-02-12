<div class="container">
    <div class="text-center">
        <h1>Luxury Deals</h1>
        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate totam cum, suscipit corrupti ducimus culpa pariatur ab architecto dolores quam quisquam assumenda consectetur consequatur ex nisi, non iste veniam quaerat.</p>
    </div>
    <div class="slider row py-5 text-dark">
        <div class="luxury-deals owl-carousel owl-theme">
            @foreach ($slider_tours as $key=>$item)
            @php
                $reviewData = $item->getScoreReview();
                $score_total = $reviewData['score_total'];
            @endphp
            <div class="item">
                <div class="tour-item rounded position-relative">
                    <div class="luxury-content position-relative pt-5">
                        <div class="deal-image">
                            <div class="luxury-corner-ribbon sticky shadow font-weight-bold">Best Seller</div>
                            <img src="{{ asset('uploads')}}/{{$item->GetImage($item->image_id)->file_path}}" alt="" width="100%" height="100%" class="cm-border-radius">
                        </div>
                        <h5 class="pl-3 d-inline-block pr-5">{{$item->title}}</h5>
                            {{-- <img src="{{ asset('front-assets/img/rating.svg')}}" reviewscore="{{$score_total}}" alt="" class="d-inline-block star-img"> --}}
                            <div class="service-review tour-review-{{$score_total}}">
                                <div class="list-star">
                                    <ul class="booking-item-rating-stars">
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <div class="booking-item-rating-stars-active" style="width: {{  $score_total * 2 * 10 ?? 0  }}%">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="review">
                                @if($reviewData['total_review'] > 1)
                                        {{ __(":number Reviews",["number"=>$reviewData['total_review'] ]) }}
                                    @else
                                        {{ __(":number Review",["number"=>$reviewData['total_review'] ]) }}
                                    @endif
                            </span>
                            </div>
                        <p class="pl-3">{{$item->Getlocation($item->location_id)->name}}</p>
                        <p class="pl-3">{{substr($item->short_desc,0,100)}}</p>
                        <span class="font-weight-bold pl-3">{{$item->price}}</span>
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


    </script>
