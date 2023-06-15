<!-- resources/views/items/show.blade.php -->
@extends('home')

@section('content')
<style>
    

    h, p {
        margin-bottom: 20px;
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

     
</style>
    <h5>programmer SMS Details</h5>

    <p><strong>ID:</strong> {{ $item->id }}</p>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>message:</strong> {{ $item->message }}</p>
@endsection
