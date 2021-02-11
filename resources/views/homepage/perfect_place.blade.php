
<div class="container-fluid">
    <h1 class=" text-center">Find The Perfect Escape</h1>
    <h6 class="font-weight-normal text-center">Choose the Destination Just Right For Your Vacation</h6>
    <div class="row mt-5 ">
        @foreach ($perfectPlace as $item)
        <div class=" col-md-4 col-sm-12  side-img">
            <img src="{{ asset('uploads')}}/{{$item->GetImage($item->image_id)->file_path}}" alt="" width="100%" height="100%">
            <p class="centered">{{$item->place_name}}</p>
            <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
            <!-- <div class="caption-img "><p>PlaceName</p></div> -->
        </div>
        @endforeach
    </div>
</div>
@push('script-front')
<script>

</script>
@endpush
