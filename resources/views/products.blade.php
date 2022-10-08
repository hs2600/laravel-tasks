@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md">

    <div class="panel-default">
      <div class="panel-body">
        @foreach ($products as $product)
        <a href="/collections">Collections</a>
        / <a href="/collections/{{ strtolower($product->material) }}">{{ $product->material }}</a>
        / <a href="/collections/{{ strtolower($product->material) }}/{{ strtolower($product->series) }}">{{ $product->series }}</a>
        / <a href="/collections/{{ strtolower($product->material) }}/{{ strtolower($product->series) }}/{{ strtolower(str_replace('/', '_', $product->size)) }}">{{ $product->size }}</a>
        @endforeach
      </div>

      <div class="panel-body">
        @foreach ($products as $product)
        {{ $product->description }}
        @endforeach
      </div>

      @if (count($products) > 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          Products
        </div>

        <div class="panel-body">
          <table class="table table-striped task-table">
            <thead>
              <th>SKU</th>
              <th>Item</th>
              <th>Description</th>
              <th>Series</th>
              <th>Size</th>
              <th>Color</th>
              <th>Finish</th>
              <th>Site</th>
              <th>Qty</th>
              <th>UofM</th>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <td class="table-text">
                  <div>{{ $product->sku }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->item }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->description }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->series }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->size }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->color }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->finish }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->site }}</div>
                </td>
                <td class="table-text">
                  <div>{{ number_format($product->qty,2) }}</div>
                </td>
                <td class="table-text">
                  <div>{{ $product->uofm }}</div>
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