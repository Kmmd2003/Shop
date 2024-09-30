@extends('layout.admin')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <form action="{{ route('restaurant-update') }}" method="post">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <input type="hidden" name="id" value="{{ $restaurant->id }}">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $restaurant->title }}" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label >Address</label>
              <textarea class="form-control" name="address"  rows="3" placeholder="Your Address">{{ $restaurant->address }}</textarea>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="text" class="form-control" name="image" value="{{ $restaurant->image }}" id="image" placeholder="Image">
            </div>
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <!-- /.card -->
      </div>
    </div>
  </div>

@endsection