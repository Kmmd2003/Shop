@extends('layout.home')

@section('content')
<h2 class="alert alert-primary"> restaurant {{ $restaurant->title }}</h2>
</div>
   <div class="container">
<div class="row">
   <img style="height: 400px;" src="{{ asset('img/'.$restaurant->image) }}" alt="">
</div>
<div class="row">
   <p>{{ $restaurant->address }}</p>
</div>
   </div>

   <div class="container">
       <div class="row">
         @foreach ($products as $product)
               <div class="col-md-4 col-sm-6">
                   <div class="card mb-30"><a class="card-img-titles" data-abc="true" href="#">
                        {{--  l,odckemc[imeqp'cf] --}}
                   </a>
                   <div class="card-body text-center">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="text-muted">{{ $product->price }}</p><a href="#" class="btn btn-outline-primary btn-sm">خرید ریال</a>
                   </div>

                   </div>
               </div>

       </div>
   </div>
          @endforeach
@endsection