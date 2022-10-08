@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md">

    <div class="panel-default">
      <div class="panel-body">
        <a href="/collections">Collections</a> / <a href="/collections/{{ $material }}">{{ $material }}</a> / {{ $series }}
      </div>
      <div class="panel-body">
        @foreach ($collection as $collection)
        {{ $collection->description }}
        @endforeach
      </div>
    </div>

    @if (count($products) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        Size
      </div>

      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
            <th>Size</th>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td class="table-text">
                <div><a href="/collections/{{ strtolower($product->material) }}/{{ strtolower($product->series) }}/{{ strtolower(str_replace('/', '_', $product->size)) }}"> {{ $product->size }} </a></div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection