@extends('layouts.main')
@section('page-title', '23 Grand Ave - Kamba Realty')
@section('content')
<div class="single-listing-page">
  <div class="listing-top">
    <img class="listing-top__img" src="https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg"
      alt="">
    <div class="listing-top__form-wrapper">
      <div class="container">
        <form action="" class="listing-top__form">
          <label class="listing-top__form-label">Schedule a tour</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">In-person</div>
            <div class="listing-top__form-option">Video</div>
          </div>
          <label class="listing-top__form-label">Date</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">February 22</div>
          </div>
          <label class="listing-top__form-label">Time</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">11 AM</div>
          </div>
          <label class="listing-top__form-label">Personal Info</label>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Phone</div>
          </div>
          <div class="listing-top__form-group">
            <div class="listing-top__form-option">Enter Email</div>
          </div>
          <div class="listing-top__form-group">
            <button type="sumbit" class="listing-top__form-button">Schedule A Tour</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection