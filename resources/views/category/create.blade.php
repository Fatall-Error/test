
@extends('layouts.main')
@section('title',  )

@section('content')
    <div class="container">
        @if($errors-> any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="container">

        <form action="{{ route('category.store') }}" method="post">
            @csrf
            @include('category._form')
        </form>
    </div>
@endsection
