@extends('layouts.main')
@section('page-title', '23 Grand Ave - Kamba Realty')
@section('content')
<div class="single-listing-page">
  <div class="listing-top">
    @foreach ($photos as $photo)
    @if ($photo->featured)
    <img class="listing-top__img" src="{{ asset('img/') }}/{{ $photo->name }}" alt="">
    @endif
    @endforeach
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

  <section class="listing-info">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>{{ $listing->address }} {{ $listing->address2 }}<br>{{ $listing->city }}, {{ $listing->state }},
            {{ $listing->zipcode }}
          </h1>
          <div class="listing-info__details">
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> {{ $listing->bedrooms }}</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> {{ $listing->bathrooms }}</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i>
              {{ $listing->squarefootage }}</span>
            </span>
          </div>
        </div>
        <div class="col-md-5">
          <span class="listing-info__agent-title">Agent</span>
          <span class="listing-info__agent-name">{{ $listing->user->name  }}</span>
          <p class="listing-info__agent-profile">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et,
            corrupti.Lorem
            ipsum dolor sit, amet consectetur adipisicing elit. Et, corrupti.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="listing-extras">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="listing-extras__details">
            <h2>More Info</h2>
            <p>{{ $listing->description }}</p>
            <h3>Details</h3>
            {{-- <ul>
              <li>Test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
              <li>test</li>
            </ul> --}}
          </div>
        </div>
        <div class="col-md-5">
          <div class="listing-extras__gallery">
            <h2>Images</h2>
            @foreach ($photos as $photo)
            @if (!$photo->featured)
            <img src="{{ asset('img/') }}/{{ $photo->name }}" alt="">
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection