@extends('layouts.app')

@section('title', 'Flawlesshands | Create Service Category')

@section('content')
    <form action={{ route('categories.store') }} method="POST">
        @method('POST')
        @csrf
        <input type="text" name="name" placeholder="Category Name">
        <input type="textarea" name="description" placeholder="Category Description">
        <input type="file" id="icon" name="icon" accept="image/png, image/jpeg, image/svg" />
        <select name="status" id="status">
            <option selected value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <button type="submit">Create service category</button>
    </form>
@endsection