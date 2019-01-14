@extends('layouts.app')

@section('content')
<a class="btn btn-secondary float-right" href="/municipalities/new">New Municipalities</a>
<table class="table" style = "margin-bottom:50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Municipality</th>
      <th scope="col">County</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach ($municipalies as $municipality)
    <tr>
        <td><?= $municipality->id ?></td>
        <td><?= $municipality->name ?></td>
        <td><?= $municipality->county->name ?></td>
        <td><a href="/municipalities/delete/{{ $municipality->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection