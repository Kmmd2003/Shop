@extends('layout.home')


@section('content')
<div class="row">
    @foreach ($restaurants as $restaurant)
    <div class="card mt-1 ms-1" style="width: 11rem;">
 <div class="card-body">
    <a href="{{ route('restaurant' , ['id' => $restaurant->id]) }}">
    <h5 class="card-title">
      {{ $restaurant->title }}
   </h5>
    <img src="{{ asset('img/'.$restaurant->image) }}" height="150" width="125" alt="">
    </a>
    <p class="card-text">{{ $restaurant->address }}</p>
 </div>
   </div>
@endforeach
</div>
@endsection