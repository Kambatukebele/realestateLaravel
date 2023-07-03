@extends('layouts.admin')
@section('page-title', 'Edit Listings')

@section('content')
<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Edit Listings</h1>
      <div class="mT-30">
        <form action="{{ route('admin.listings.update', ['slug'=>$listing->slug, 'id'=> $listing->id]) }}"
          method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St"
              value="{{ old('address', $listing->address) }}" autofocus autocomplete="address">
            @error('address')
            <div class="error-sub-text">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="address2">Address 2</label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment, studio, or floor"
              name="address2" value="{{ old('address2', $listing->address2) }}" autofocus autocomplete="address2">
            @error('address2')
            <div class="error-sub-text">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="city">City</label>
              <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $listing->city) }}"
                autofocus autocomplete="city">
              @error('city')
              <div class="error-sub-text">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-4">
              <label class="form-label" for="state">State</label>
              <select id="state" name="state" class="form-control">
                <option value="FL" @selected(old('state', $listing->state)=='FL' )>Florida</option>
                <option value="NY" @selected(old('state', $listing->state)=='NY' )>New York</option>
              </select>
            </div>
            <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label>
              <input type="text" class="form-control" id="zipcode" name="zipcode"
                value="{{ old('zipcode', $listing->zipcode) }}" autofocus autocomplete="zipcode">
              @error('zipcode')
              <div class="error-sub-text">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bedrooms">Bed Rooms</label>
              <input type="text" class="form-control" id="bedrooms" placeholder="4" name="bedrooms"
                value="{{ old('bedrooms', $listing->bedrooms) }}" autofocus autocomplete="bedrooms">
              @error('bedrooms')
              <div class="error-sub-text">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="bathrooms">Bath Room</label>
              <input type="text" class="form-control" id="bathrooms" placeholder="2" name="bathrooms"
                value="{{ old('bathrooms', $listing->bathrooms) }}" autofocus autocomplete="bathrooms">
              @error('bathrooms')
              <div class="error-sub-text">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="squarefootage">SQFT</label>
              <input type="text" class="form-control" id="squarefootage" placeholder="2000" name="squarefootage"
                value="{{ old('squarefootage', $listing->squarefootage) }}" autofocus autocomplete="squarefootage">
              @error('squarefoot')
              <div class="error-sub-text">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Save Listing</button>
          <a href="{{ route('admin.listings.delete', ['slug'=>$listing->slug, 'id'=>$listing->id]) }}"
            onclick="return confirm('Are you sure you want to delete this listing?')" class="btn
          btn-danger btn-color">Delete Listing
          </a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection