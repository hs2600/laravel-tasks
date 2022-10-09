@extends('layouts.app')

@section('content')

<div class="header-container" style="background-image: url(/assets//images/hd_bg.jpg) !important;">
  <div style="background-color: rgba(5,64,60,0.65); padding: 50px;">

    <div class="container">
      <div class="row center-block">
        <h1>Collections by Material</h1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row" style="border: 0px solid red; padding: 0px; padding-top: 20px; padding-bottom: 30px;">
    @if (count($collections) > 0)
    @foreach ($collections as $collection)

    <div class="col-md-4 img-container" style="border: 1px solid #efefef; padding: 0px; min-height: 215px;">
      <a href="/collections/{{ $collection->material }}">
        <img src="{{ $collection->img_url }}" width="100%" class="img-preview" style="min-height: 215px;">
        <span class="middle-vis" style="background-color: white; color: black; width: 150px; padding: 8px; text-align: center; border-radius: 2px; border-bottom: 3px solid gray">
          {{ $collection->material }} <span class="fa fa-arrow-circle-right"></span>
        </span>
      </a>
    </div>

    @endforeach
    @endif

  </div>
</div>

@endsection