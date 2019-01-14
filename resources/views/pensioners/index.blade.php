@extends('layouts.app')

@section('content')
<a class="btn btn-secondary float-right" href="/pensioners/new">New Pensioners</a>
<table class="table" style = "margin-bottom:50px;">
  <thead>
    <tr>
      <th scope="col">Pensioner Name</th>
      <th scope="col">Pensioner Lastname</th>
      <th scope="col">Sex</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Year Carer</th>
      <th scope="col">Amount Pension</th>
      <th scope="col">Place</th>
      <th scope="col">Pension Type</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach ($pensioners as $pensioner)
    <tr> 
      <td><?= $pensioner->name ?></td>
      <td><?= $pensioner->lastname ?></td>
      <td><?= $pensioner->sex ?></td>
      <td><?= $pensioner->date_of_birth ?></td>
      <td><?= $pensioner->year_carer ?></td>
      <td><?= $pensioner->amount_pension ?></td>
      <td><?= $pensioner->place->name ?></td>
      <td><?= $pensioner->PensionType->name ?></td>
      <td><a href="/pensioners/delete/{{ $pensioner->id }}" class="btn btn-sm btn-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
