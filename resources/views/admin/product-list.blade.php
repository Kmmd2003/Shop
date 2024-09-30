@extends('layout.admin')

@section('content')

<div class="row">
  <div class="col-12">
 

    <div class="card">
      <div class="card-header">
        <a href="{{ route('product-create') }}" class="col-1 btn btn-block btn-warning ">Create</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Restaurant</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{ $product->name }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->restaurant()->title }}</td>
              <td>{{ $product->category()->name }}</td>
              <td><a href="{{ route('product-edit' , ['id' => $product->id]) }}">Edit</a></td>
              <td><a href="{{ route('product-delete' , ['id' => $product->id]) }}">Delete</a></td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Restaurant</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>

@endsection