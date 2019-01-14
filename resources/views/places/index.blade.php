@extends('layouts.app')

@section('content')
<a class="btn btn-secondary float-right" href="/places/new">New Places</a>
<table class="table" style = "margin-bottom:50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Place</th>
      <th scope="col">Municipality</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach ($places as $place)
    <tr>
      <td><?= $place->id ?></td>
      <td><?= $place->name ?></td>
      <td><?= $place->municipality->name ?></td>
      <td><a href="/places/delete/{{ $place->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection