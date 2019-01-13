@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number Of Countries </th>
      <th scope="col">Native Name </th>
    </tr>
  </thead>
  <tbody>
  @foreach ($continents as $continent)
    <tr>
      <td><?= $continent->id ?></td>
      <td><?= $continent->continent_name ?></td>
      <td><?= $continent->number_of_countries ?></td>
      <td><?= $continent->native_name ?></td>

    </tr>
  @endforeach

  @foreach ($cities as $city)
    <tr>
        <td><?= $city->id ?></td>
        <td><?= $city->city_name ?></td>
        <td><?= $city->country->country_name ?></td>
    </tr>
@endforeach

  </tbody>
</table>

@endsection