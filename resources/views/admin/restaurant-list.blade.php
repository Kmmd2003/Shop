@extends('layout.admin')

@section('content')

<div class="row">
  <div class="col-12">
 

    <div class="card">
      <div class="card-header">
        <a href="{{ route('restaurant-create') }}" class="col-1 btn btn-block btn-warning ">Create</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Title</th>
            <th>Address</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($restaurants as $restaurant)
            <tr>
              <td>{{ $restaurant->title }}</td>
              <td>{{ $restaurant->address }}</td>
              <td><img src="{{ asset('img/'.$restaurant->image) }}" width="90px" height="60px" alt=""></td>
              <td><a href="{{ route('restaurant-edit',['id' => $restaurant->id ]) }}">Edit</a></td>
              <td><a href="{{ route('restaurant-delete' , ['id' => $restaurant->id]) }}">Delete</a></td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Title</th>
            <th>Address</th>
            <th>Image</th>
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