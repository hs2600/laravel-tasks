@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        Search by product
                    </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')

                        <!-- New Task Form -->
                        <form action="/products" method="GET" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="product" class="col-sm-3 control-label">Product</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="product" class="form-control" value="{{ old('product') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-btn fa-plus"></i>Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                        <td class="table-text"><div>{{ $product->sku }}</div></td>
                                        <td class="table-text"><div>{{ $product->item }}</div></td>
                                        <td class="table-text"><div>{{ $product->description }}</div></td>
                                        <td class="table-text"><div>{{ $product->series }}</div></td>
                                        <td class="table-text"><div>{{ $product->size }}</div></td>
                                        <td class="table-text"><div>{{ $product->color }}</div></td>
                                        <td class="table-text"><div>{{ $product->finish }}</div></td>
                                        <td class="table-text"><div>{{ $product->site }}</div></td>
                                        <td class="table-text"><div>{{ number_format($product->qty,2) }}</div></td>
                                        <td class="table-text"><div>{{ $product->uofm }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $products->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
