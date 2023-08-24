@extends('live-pro.admin')
@section('content')
<main>
    @foreach($products as $cat)
    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>{{$cat->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- shop-area start -->
    <section class="shop-details-area pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-4">
                    <div class="product-details-img mb-10">
                        <div class="tab-content" id="myTabContentpro">
                            <img src="{{asset('img/'.$cat->photos)}}" oncontextmenu="return false">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="product-details mb-30 pl-30">

                        <h2 class="pro-details-title mb-15">{{$cat->title}} </h2>
                        <!-- <p class="category">Category : <a href="#">ALDROPS</a></p>-->

                        <div class="product-variant">
                            <div class="product-desc variant-item">
                                <li>
                                    <p>&nbsp;</p>
                                    <h4>Product Features</h4>
                                    <ul>
                                        <li>LENGTH : 150 MM , 200 MM , 250 MM , 300 MM .</li>
                                        <li>ROD : 12 MM</li>
                                        <li>MATERIAL : STAINLESS STEEL 201 GRADE .</li>
                                        <li>FINISH : 2 TONE .</li>
                                        <li>HEAVY DUTY .</li>
                                        <li>EASY TO INSTALL .</li>
                                        <li>USED FOR RESIDENTIAL DOORS .</li>
                                    </ul>
                                    <p>CATEGORY: <a href="http://jkfitting.com/product-category/aldrops/">ALDROPS</a>
                                    </p>
                                </li>
                            </div>
                            <div class="product-action-details variant-item">
                                <div class="product-details-action">

                                    <div class="details-cart mt-0">
                                        <a href="contact.php" class="btn theme-btn"> Enquire</a>
                                        <a target="next"
                                            href="https://drive.google.com/file/d/1VJgAP3ZK5z9dahryzM8Dm9s2P4JB63Yg/view?usp=sharing"
                                            class="btn theme-btn">E-Catalogue </a>
                                        <div class="details-cart mt-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @endforeach
</main>

<!-- 
<section class="team-area pt-100 pb-70" style="background:#f5f5f5;">

    <div class="container">
    @foreach($products as $cat)

        <div class="row">
            <div class="col-xl-12">
                <div class="area-title text-center mb-50">
                <h2>{{$cat->title}}</h2>-->

<!-- <p>Our one of the best team members</p> -->
<!-- </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team mb-30">
                    <div class="team__img">
                        <img src="{{asset('img/'.$cat->photos)}}" oncontextmenu="return false">
                    </div>
                    <div class="team__content text-center white-bg">
                            <h4>{{$cat->title}}</h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section> -->








































@endsection