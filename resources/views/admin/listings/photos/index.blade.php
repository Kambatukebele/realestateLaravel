@extends('layouts.admin')
@section('page-title', 'Show Photos Listings')

@section('content')

<div class="mainContent">
  <div class="row">
    <div class="col-md-10">
      <h1>Show Photos Listings</h1>
    </div>
    <div class="col-md-2">
      <a style="width: 100%; margin-top:1rem;color:black;"
        href="{{ route('admin.listings.edit', ['slug'=>$slug, 'id'=>$id]) }}"
        class="btn cur-p btn-primary text-white">Go Back to Edit page
      </a>
      <a style="width: 100%; margin-top:1rem;color:black;"
        href="{{ route('admin.listings.photos.create', ['slug'=>$slug, 'id'=>$id]) }}"
        class="btn cur-p btn-primary text-white">Add
        new Photo
      </a>
    </div>
  </div>
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
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($photos as $photo)
            <tr>
              <th scope="row">{{ $photo->id }}</th>
              <td>
                <img src="/img/{{ $photo->name}}" alt="" style="width:100px">
              </td>
              <td>
                {{ $photo->name }}

              </td>
              <td>
                @if ($photo->featured)
                <div class="btn cur-p btn-success" style="width: 100px; font-size:.8rem">
                  Featured Image
                </div>
                @else

                @endif
              </td>
              <td>
                <a style="width: 100%; margin-top:1rem;color:black;"
                  href="{{ route('admin.listings.photos.featured', ['slug'=>$slug, 'id'=>$id, 'photo_id' => $photo->id]) }}"
                  onclick="return confirm('Did you save your updates?')" class="btn cur-p btn-outline-success"><i
                    class="fa-solid fa-star"></i> Make Featured
                </a>
                <a style="width: 100%; margin-top:1rem;"
                  href="{{ route('admin.listings.photos.delete', ['slug'=>$slug, 'id'=>$id, 'photo_id' => $photo->id]) }}"
                  onclick="return confirm('Are you sure you want to delete this photo?')"
                  class="btn btn-danger btn-color">Delete
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $photos->links() }}
      </div>
    </div>
  </div>
</div>
@endsection