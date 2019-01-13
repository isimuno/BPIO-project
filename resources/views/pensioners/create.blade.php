@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/pensioners" class="col-md-5 mx-auto" style = "padding:30px;">
@csrf


<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="First Name">
</div>
<div class="form-group">
    <input class="form-control" name="lastname" type="text" placeholder="Last Name">
</div>
<div class="form-group">
<select class="form-control" name="sex">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>
</div>
<div class="form-group">
    <input class="form-control" name="date_of_birth" type="text" placeholder="Date of Birth">
</div>
<div class="form-group">
    <input class="form-control" name="year_carer" type="text" placeholder="Year of Carer">
</div>
<div class="form-group">
    <input class="form-control" name="amount_pension" type="text" placeholder="Amount Pension">
</div>
<div class="form-group">
    <select class="form-control" name="place_id">
        @foreach($places as $place)
        <option value="{{ $place->id }}">{{ $place->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="pension_type_id">
        @foreach($pension_types as $PensionType)
        <option value="{{ $PensionType->id }}">{{ $PensionType->name }}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>

@endsection
