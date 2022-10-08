@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md">

    @if (count($collections) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        Collections
      </div>

      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
            <th>Material</th>
            <th>Description</th>
            <th>Image</th>
          </thead>
          <tbody>
            @foreach ($collections as $collection)
            <tr>
              <td class="table-text">
                <div><a href="/collections/{{ strtolower($collection->material) }}"> {{ $collection->material }} </a></div>
              </td>
              <td class="table-text">
                <div>{{ $collection->description }}</div>
              </td>
              <td class="table-text">
                <div><a href="/collections/{{ strtolower($collection->material) }}">
                  <img src="{{ $collection->img_url }}" style="width:350px;"></a>
                </div>
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