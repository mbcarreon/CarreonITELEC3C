@extends('layouts.app')

@section('content')

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<h4> Categories </h4>
<table class="table">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categories as $cat_data)
        <tr>
            <td>{{ $cat_data->id }}</td>
            <td>{{ $cat_data->name }}</td>
            <td>{{ $cat_data->description }}</td>
            <td>{{ $cat_data->created_at}}</td>
            <td>{{ $cat_data->updated_at}}</td>
            <td><a type="button" href="/category/{{ $cat_data->id }}" class="btn btn-primary">See more</a></td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection