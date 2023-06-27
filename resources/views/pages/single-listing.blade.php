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

  <section class="listing-info">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>2353 Grand Ave <br>
            Miami, FL 33456
          </h1>
          <div class="listing-info__details">
            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 4</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> 3</span>
            <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> 2440 SQFT</span>
            </span>
          </div>
        </div>
        <div class="col-md-5">
          <span class="listing-info__agent-title">Agent</span>
          <span class="listing-info__agent-name">Kamba</span>
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
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloremque nesciunt, deleniti magni,
              error cumque consequatur recusandae eveniet veniam, aliquid reprehenderit perspiciatis repudiandae
              delectus quam impedit porro. Aspernatur voluptate repellat dolores corporis consectetur, ex voluptas illum
              quia iusto nesciunt sunt esse quo numquam quasi! Tenetur itaque repellendus, illum amet quisquam aperiam!
              Mollitia sit aspernatur non maiores, nulla porro ea ducimus facere unde tempora, sapiente, modi iste
              eligendi repudiandae vel beatae praesentium minus sequi velit recusandae reprehenderit! Deserunt, possimus
              similique ipsa in quis architecto nisi recusandae sit? Maiores totam quisquam adipisci, doloribus sint
              numquam illo tempore minus, omnis quod eum ipsum?
            </p>
            <h3>Details</h3>
            <ul>
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
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <div class="listing-extras__gallery">
            <h2>Images</h2>
            <img src="https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg" alt="">
            <img src="https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg" alt="">
            <img src="https://i.pinimg.com/originals/55/da/50/55da5058c849243292219f4da55322c3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection