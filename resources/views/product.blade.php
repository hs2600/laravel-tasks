@extends('layouts.app')

@section('content')

<div class="page-content">
  <div class="wrapper">
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


          <div id="markdown-content-container">
            <div>

              <div class="row">
                <div class="col col-md-7">



                  @foreach ($products as $product)

                  <div class="row">
                    <img src="{{ $product->img_url }}" style="max-height: 400px;" alt="{{ $product->sku }} product image" class="image img-responsive" id="expandedImg">
                  </div>

                </div>
                <div class="col-md-5">
                  <span class="product-title">{{ ucwords(strtolower($product->description)) }}</span>
                  <hr style="margin-top: 10px;">

                  <div class="row">
                    <div class="col-sm-6">
                      <label class="">Material:</label>
                      <span>{{ $product->material }}</span>
                    </div>
                    <div class="col-sm-6">
                      <label class="">Series:</label>
                      <span>{{ $product->series }}</span>
                    </div>
                    <div class="col-sm-6">
                      <label class="">Size:</label>
                      <span>{{ $product->size }}</span>
                    </div>
                    <div class="col-sm-6">
                      <label class="">Color:</label>
                      <span>{{ $product->color }}</span>
                    </div>
                    <div class="col-sm-6">
                      <label class="">Finish:</label>
                      <span>{{ $product->finish }}</span>
                    </div>
                  </div>
                  <p>&nbsp;</p>
                  <p class="product-description">{{ $product->series_desc }}</p>

                  <div style="background-color: #f6f6f6; border-radius: 0px; padding:10px; padding-left: 30px;">
                      <div class="">
                        <span class="product-price"><b><i>{{ $product->qty }} {{ strtolower($product->uofm) }} in stock in Harbor City</i></b></span>
                      </div>
                  </div>


                  <hr>
                  @endforeach

                  <button class="buy-button snipcart-add-item btn btn-info enabled" style="width:100%;
                font-family: Roboto Condensed; border-bottom: 5px solid rgb(136, 41, 41); border-radius: 2px;">
                    ADD TO CART
                  </button>
                  <br><br>


                  <div class="row justify-content-md-center">
                    <div class="col-sm-6" style="padding-bottom: 5px;">
                      <button class="snipcart-checkout btn btn-primary enabled" style="text-align: center; font-weight: bold; padding: 5px; padding-left: 20px; padding-right: 20px;">CART <i class="fa fa-shopping-cart"></i></button>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <hr>
          </div>
          <div style="clear:both;">
            <p class="text-center">
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="container">
    <div class="col-md">

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