@extends('layouts.app')

@section('content')


<div class="header-container" style="background-image: url(/assets/images/hd_bg.jpg) !important;">
  <div style="background-color: rgba(5,64,60,0.65); padding-top: 20px !important; padding: 20px;">

    <div class="container">
      <div class="row center-block">
        <h1>{{ $material }}</h1>
      </div>
      <div class="center-block text-justify">
        <h4 style="font-family: Times New Roman;">
          @foreach ($collection as $collection)
          {{ $collection->description }}
          @endforeach
        </h4>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="col-md" style="padding-bottom: 20px;">

    <div class="panel-default">
      <div class="panel-body">
        <a href="/collections">Collections</a> / {{ $material }}
      </div>
    </div>

    <div class="row" style="border: 0px solid red; padding: 0px; padding-top: 0px; padding-bottom: 0px;">
      @if (count($collections) > 0)
      @foreach ($collections as $collection)

      <div class="col-md-4 img-container" style="border: 1px solid #efefef; padding: 0px; min-height: 400px;">
        <a href="/collections/{{ $collection->material }}/{{ $collection->series }}">
          <img src="{{ $collection->img_url }}" width="100%" class="img-preview" style="min-height: 400px;">
          <span class="middle-vis" style="background-color: white; color: black; width: 150px; padding: 8px; text-align: center; border-radius: 2px; border-bottom: 3px solid gray">
            {{ $collection->series }} <span class="fa fa-arrow-circle-right"></span>
          </span>
        </a>
      </div>

      @endforeach
      @endif
    </div>
    {{ $collections->links() }}
  </div>
</div>
@endsection