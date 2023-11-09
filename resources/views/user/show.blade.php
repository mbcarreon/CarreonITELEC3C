@extends('layouts.app')

@section('content')
<h4> {{ $user->name }} details: </h4>

<p> Name: {{ $user->name }} </p>
<p> Created At: {{ $user->created_at }} </p>
<p> Updated At: {{ $user->updated_at }} </p>

@endsection