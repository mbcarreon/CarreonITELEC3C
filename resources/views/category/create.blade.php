@extends('layouts.app')

@section('content')

<form action="{{ url('/save-category') }}" method="POST">
    <h4> Create new category </h4>
    @csrf
    <div class="row my-3">
        <div class="col-md-12 my-3">
            <label> Name: </label>
            <input type="text" name="name" id="name" class="form-control rounded" required>
        </div>
        <div class="col-md-12 my-3">
            <label> Description: </label>
            <input type="text" name="description" id="description" class="form-control rounded" required>
        </div>
    </div>
    <button class="btn btn-success" type="submit"> Save Category </button>
</form>

@endsection