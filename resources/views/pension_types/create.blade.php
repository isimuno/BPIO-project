@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/pension_types" class="col-md-5 mx-auto">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Pension Type">
</div>


<button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>

@endsection
