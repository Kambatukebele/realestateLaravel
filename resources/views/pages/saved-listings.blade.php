@extends('layouts.account')
@section('page-title', 'User Saved Listings - Kamba Realty')
@section('title', 'Saved Listings')
@section('page-bg', 'https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg')
{{-- @endsection --}}
@section('content')
<div class="listings-properties">
  <div class="row">
    <div class="col-sm-12 col-lg-4 col-xl-4">
      <div class="listings-properties__item">
        <img src="https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg" alt="">
        <div class="listings-properties__saved">
          <i class="fa-solid fa-heart"></i>
        </div>
        <span class="listings-properties__item-price">$250,000</span>
        <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i
            class="fa-solid fa-bath"></i>
          3 <i class="fa-solid fa-ruler"></i> 2440 SQFT</span>
        <span class="listings-properties__item-address">2135 Grand St, <br> Miami Beach, F 23456</span>
        <div class="listings-properties__item-line"></div>
        <span class="listings-properties__item-owner">KAMBA Realty</span>
      </div>
    </div>
  </div>
</div>
@endsection