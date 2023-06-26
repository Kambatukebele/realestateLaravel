@extends('layouts.main')
@section('page-title', 'All Properties - Kamba Realty')
@section('content')
<div class="listings-page">
  <div class="listings-city">
    <img class="listings-city__img" src="https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg"
      alt="">
    <h1 class="listings-city__title">South Beach</h1>
  </div>
  <div class="listings-filter">
    <div class="listings-filter__wrapper">
      <div class="listings-filter__option">
        Any Price <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        All Beds <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        Home type <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        More <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__button">
        Search
      </div>
    </div>
  </div>

  <div class="listings-properties">
    <div class="container">
      <div class="row">
        @for ($i = 0; $i < 10; $i++) <div class="col-sm-6 col-lg-4 col-xl-3">
          <a href="/listing/2123-grand-ave-miami-fl-33456/1" class="listings-properties__item">
            <img src="https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg" alt="">
            <div class="listings-properties__saved">
              <i class="fa-solid fa-heart"></i>
            </div>
            <span class="listings-properties__item-price">$250,000</span>
            <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i
                class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler"></i> 2440 SQFT</span>
            <span class="listings-properties__item-address">2135 Grand St, <br> Miami Beach, F 23456</span>
            <div class="listings-properties__item-line"></div>
            <span class="listings-properties__item-owner">KAMBA Realty</span>
          </a>
      </div>
      @endfor
    </div>
  </div>
</div>
@endsection