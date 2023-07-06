@extends('layouts.admin')
@section('page-title', 'Show Photos Listings')

@section('content')
<h1>Show Photos Listings</h1>
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
              <th scope="col">Id</th>
              <th scope="col">Photo</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
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
              <td>
                @if ($listing->status == 'published' )
                <div class="btn cur-p btn-success" style="width: 100px; font-size:.8rem">
                  {{ $listing->status }}
                </div>
                @else
                <div class="btn cur-p btn-warning" style="width: 100px; font-size:.8rem">
                  {{ $listing->status }}
                </div>
                @endif

              </td>
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