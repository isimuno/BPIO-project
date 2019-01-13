@extends('layouts.app')

@section('content')
<a class="btn btn-secondary float-right" href="/counties/new">New Counties</a>
<table class="table" style = "margin-bottom:50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">County</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($counties as $county)
    <tr>
      <td><?= $county->id ?></td>
      <td><?= $county->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection