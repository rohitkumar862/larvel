@extends('live-pro.admin')
@section('content')



<section class="team-area pt-100 pb-70" style="background:#f5f5f5;">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="area-title text-center mb-50">
                    <h2>{{$category->name}}</h2>
                    <!-- <p>Our one of the best team members</p>-->
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6">
                <div class="team mb-30">
                    <div class="team__img">
                        <img src="{{asset('img/'.$product->photos)}}" oncontextmenu="return false">
                    </div>
                    <div class="team__content text-center white-bg">
                        <a href="{{route('enquiry.id',$product->id)}}"> 
                            <h4>{{$product->title}}</h4>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


















@endsection
