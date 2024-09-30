@extends('layout.admin')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <form action="{{ route('product-insert') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Name">
          </div>
          <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>
          <div class="form-group">
                  <label>Restaurant</label>
                  <select name="restaurant" class="form-control">
                  @foreach ($restaurants as $restaurant)
                  <option value="{{ $restaurant->id }}">{{ $restaurant->title }}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select name="category" class="form-control">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                  </select>
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