@extends('layouts.app')

@section('title', 'Flawlesshands | Create Service Category')

@section('content')

    @foreach ($categories as $category)
        <div>
            <h2>{{ $category->name }}</h2>
            <p>{{ $category->description }}</p>
            <img src="{{ $category->icon }}" alt="{{ $category->name }}">
            <p>{{ $category->status }}</p>
        </div>    
    @endforeach

@endsection