@extends('layouts.admin')
@section('page-title', 'Show All Listings')

@section('content')
<h1>Show All Listings</h1>
<div class="mainContent">
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Bordered table</h4>
        <p>Add <code class="highlighter-rouge">.table-bordered</code> for borders on all sides of the table and cells.
        </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Address</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($listings as $listing)
            <tr>
              <th scope="row">{{ $listing->id }}</th>
              <td>
                <a href="{{ route('admin.listings.edit', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
                  {{ $listing->address }}, <br>{{ $listing->address2 }}, {{ $listing->state }},{{ $listing->zipcode }}
                </a>
              </td>
              <td>Active</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $listings->links() }}
      </div>
    </div>
  </div>
</div>
@endsection