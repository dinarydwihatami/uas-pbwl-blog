@extends('tmp.index')

@section('content')
<div class="card-group">
  <div class="card">
    <img src="{{ asset('upload/images.png')}}" class="card-img-top" alt="..." width="50px" >
    <div class="card-body">
      <h5 class="card-title">Terpopuler</h5>
      <p class="card-text">Lifestyle</p>
      <p class="card-text"><small class="text-muted">Fashion</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('upload/food.jfif')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Makanan Khas Daerah</h5>
      <p class="card-text">Traveller Food</p>
      <p class="card-text"><small class="text-muted">Healthy food</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('upload/trip.jfif')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Trip</h5>
      <p class="card-text">Wisata Liburan</p>
      <p class="card-text"><small class="text-muted">Mancanegara</small></p>
    </div>
  </div>
</div>

@endsection
