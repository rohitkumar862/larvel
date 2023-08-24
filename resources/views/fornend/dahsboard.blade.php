@extends('fornend.admin')
@section('content')
<!-- <sidebar> -->

<section class="slider_section mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="categories_menu">
                    <div class="categories_title">
                        <h2 class="categori_toggle"> categories</h2>
                    </div>
                    <div class="categories_menu_toggle">
                        <ul>
                            @foreach($categories as $category)

                            <li class="menu_item_children categorie_list">

                                <a href="#">{{$category->name}} <i class="fa fa-angle-right"></i></a>
                                @php
                                $subcategories=\App\Models\subcategory::where('category_id',$category->id)->get();
                                @endphp
                                @if(count($subcategories)>0)
                                <ul class="categories_mega_menu">
                                    @foreach($subcategories as $subcategory)
                                    <li class="menu_item_children"><a href="#">{{$subcategory->title}}</a>
                                        <!-- <ul class="categorie_sub_menu">
                                            <li><a href="#">Bower</a></li>
                                        </ul> -->
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        <div class="owl-item active" style="width: 698px;">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg"
                style="background-image: url(&quot;assets/img/slider/slider1.jpg&quot;);">
                <div class="slider_content">
                    <h2>Top Quality</h2>
                    <h1>Aftermarket Turbocharger Specialist</h1>
                    <a class="button" href="shop.html">shopping now</a>
                </div>
            </div>
            </div>

        </div>
    </div>
</section>


<!-- </endsidebar> -->
<section class="shipping_area mb-50">
    <div class="container">
        <div class=" row">
            <div class="col-12">
                <div class="shipping_inner">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{asset('assets/assets/img/about/shipping1.png')}}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>Free Shipping</h2>
                            <p>Free shipping on all US order</p>
                        </div>
                    </div>
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{asset('assets/assets/img/about/shipping2.png')}}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>Support 24/7</h2>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{asset('assets/assets/img/about/shipping3.png')}}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>100% Money Back</h2>
                            <p>You have 30 days to Return</p>
                        </div>
                    </div>
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{asset('assets/assets/img/about/shipping4.png')}}" alt="">
                        </div>
                        <div class="shipping_content">
                            <h2>Payment Secure</h2>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Our</strong>Products</span></h2>
                    <ul class="product_tab_button nav" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#brake" role="tab" aria-controls="brake"
                                aria-selected="true">Brake Parts</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#wheels" role="tab" aria-controls="wheels"
                                aria-selected="false">Wheels & Tires</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#turbo" role="tab" aria-controls="turbo"
                                aria-selected="false">Turbo System</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="brake" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product1.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product2.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$180.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product3.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product4.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-47%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$3200.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product4.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product5.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$150.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product6.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product7.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$175.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product8.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product9.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-07%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$180.00</span>
                                    <span class="old_price">$420.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product10.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product11.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product12.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product13.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$160.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="wheels" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product10.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product11.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$180.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product12.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product13.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-47%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$3200.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product14.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product15.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$150.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product16.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product17.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$175.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product18.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product1.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-07%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$180.00</span>
                                    <span class="old_price">$420.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product2.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product3.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product4.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product5.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$160.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="turbo" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product6.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product7.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$180.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Bose SoundLink Bluetooth Speaker</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product8.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product9.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-47%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$160.00</span>
                                    <span class="old_price">$3200.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Variable with soldout product for title</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product10.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product11.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$150.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Lorem ipsum dolor sit amet, consectetur</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product12.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product7.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$175.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product13.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product14.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-07%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$180.00</span>
                                    <span class="old_price">$420.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Accusantium dolorem Security Camera</a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product15.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product16.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="current_price">$140.00</span>
                                    <span class="old_price">$320.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_name">
                            <h3><a href="product-details.html">Koss Porta Pro On Ear Headphones </a></h3>
                            <p class="manufacture_product"><a href="#">Accessories</a></p>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product17.jpg')}}" alt=""></a>
                            <a class="secondary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product18.jpg')}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-57%</span>
                            </div>

                            <div class="action_links">
                                <ul>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"
                                            title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                    <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                    <li class="compare"><a href="compare.html" title="compare"><span
                                                class="lnr lnr-sync"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_content">
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="product_footer d-flex align-items-center">
                                <div class="price_box">
                                    <span class="regular_price">$160.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured_categories mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Featured</strong>Categories</span></h2>
                </div>
                <div class="featured_container">
                    <div class="featured_carousel featured_column3 owl-carousel">
                        <div class="single_items">
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Body Parts</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured1.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Brake Parts</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_items">
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured2.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Lighting</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured3.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Moto Oil</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_items">
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured4.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Turbo Systems</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured5.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Wheels & Tires</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single_items">
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured3.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Body Parts</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="featured_thumb">
                                    <a href="#"><img src="{{asset('assets/assets/img/featured/featured5.jpg')}}"
                                            alt=""></a>
                                </div>
                                <div class="featured_content">
                                    <h3 class="product_name"><a href="#">Brake Parts</a></h3>
                                    <div class="sub_featured">
                                        <ul>
                                            <li><a href="#">Handbag</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <a class="view_more" href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="small_product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Body</strong>Parts</span></h2>
                </div>
                <div class="product_carousel small_product product_column3 owl-carousel">
                    <div class="single_product">
                        <div class="product_content">
                            <h3><a href="product-details.html">Lid Cover Cookware Steel Hybrid</a></h3>
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="current_price">$140.00</span>
                                <span class="old_price">$320.00</span>
                            </div>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product2.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_content">
                            <h3><a href="product-details.html">JBL Flip 3 Splasroof Portable Bluetooth 2</a></h3>
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="regular_price">$180.00</span>
                            </div>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product12.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_content">
                            <h3><a href="product-details.html">Nonstick Dishwasher On-Ear Headphones 2</a></h3>
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="current_price">$140.00</span>
                                <span class="old_price">$320.00</span>
                            </div>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product13.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="single_product">
                        <div class="product_content">
                            <h3><a href="product-details.html">Marshall Portable Bluetooth Speaker</a></h3>
                            <div class="product_ratings">
                                <ul>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                    <li><a href="#"><i class="ion-star"></i></a></li>
                                </ul>
                            </div>
                            <div class="price_box">
                                <span class="current_price">$140.00</span>
                                <span class="old_price">$320.00</span>
                            </div>
                        </div>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.html"><img
                                    src="{{asset('assets/assets/img/product/product15.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection