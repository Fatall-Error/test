@extends('layouts.main')
@section('title',  )

@section('content')
    <div class="container">
        <h1>{{ $product ->title }}</h1>
    </div>
    <div class="container">
        <p>{{ $product ->description }}</p>
    </div>
@endsection


