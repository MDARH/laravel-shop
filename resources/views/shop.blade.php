@extends('layouts.app')
@section('content')

@if($products)
<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <h2>Shop Category</h2>
          <p>Very us move be blessed multiply night</p>
        </div>
        <div class="page_link">
          <a href="index.html">Home</a>
          <a href="category.html">Shop</a>
          <a href="category.html">Women Fashion</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_gap">
  <div class="container">
    <div class="row flex-row-reverse">
      <div class="col-lg-9">
        <div class="product_top_bar">
          <div class="left_dorp">
            <select class="sorting">
              <option value="1">Default sorting</option>
              <option value="2">Default sorting 01</option>
              <option value="4">Default sorting 02</option>
            </select>
            <select class="show">
              <option value="1">Show 12</option>
              <option value="2">Show 14</option>
              <option value="4">Show 16</option>
            </select>
          </div>
        </div>

        <div class="latest_product_inner">
          <div class="row">
    
          @foreach($products as $product)
            <div class="col-lg-4 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  @php $i = 1; @endphp
                  @foreach($product->images as $image)
                    @if($i>0)
                      <img class="card-img" src="{{asset('images/product/'.$image->image)}}" alt="{{$product->title}}" />
                    @endif
                   @php --$i; @endphp
                  @endforeach
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="{{route('shop.single', $product->slug)}}" class="d-block">
                    <h4>{{$product->title}}</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">${{$product->offer_price}}</span>
                    <del>${{$product->price}}</del>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          </div>

          <div class="row">
            <nav class="blog-pagination justify-content-center d-flex">
              {{$products->links()}}
            </nav>
          </div>

        </div>
      </div>

      <div class="col-lg-3">
        @include('shop.sidebar')
      </div>

    </div>
  </div>
</section>
<!--================End Category Product Area =================-->
@else
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="banner_content d-md-flex justify-content-between align-items-center">
        <div class="mb-3 mb-md-0">
          <h2>No product found</h2>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection