@extends('layouts.app')

@section('content')
<a class="btn btn-secondary float-right" href="/pension_types/new">New Pension Types</a>
<table class="table" style = "margin-bottom:50px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pension Type</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach ($pension_types as $PensionType)
    <tr>
      <td><?= $PensionType->id ?></td>
      <td><?= $PensionType->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection