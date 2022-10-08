@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md">

    <div class="panel-default">
      <div class="panel-body">
        <a href="/collections">Collections</a> / {{ $material }}
      </div>
      <div class="panel-body">
        @foreach ($collection as $collection)
        {{ $collection->description }}
        @endforeach
      </div>
    </div>

    @if (count($collections) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        Series
      </div>

      <div class="panel-body">
        <table class="table table-striped task-table">
          <thead>
            <th>Series</th>
            <th>Description</th>
            <th>Image</th>
          </thead>
          <tbody>
            @foreach ($collections as $collection)
            <tr>
              <td class="table-text">
                <div><a href="/collections/{{ strtolower($collection->material) }}/{{ strtolower($collection->series) }}"> {{ $collection->series }} </a></div>
              </td>
              <td class="table-text">
                <div>{{ $collection->description }}</div>
              </td>
              <td class="table-text">
                <div><a href="/collections/{{ strtolower($collection->material) }}/{{ strtolower($collection->series) }}">
                    <img src="{{ $collection->img_url }}" style="width:250px;"></a>
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