<!-- resources/views/items/edit.blade.php -->
@extends('home')

@section('content')
    <h1>Edit </h1>
    <style>
        .container {
            margin-top: 20px;
        }
    
        h1 {
            margin-bottom: 20px;
        }
    
        .add-button {
            margin-bottom: 20px;
        }
    
        table {
            width: 100%;
            border-collapse: collapse;
        }
    
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    
        th {
            background-color: #f2f2f2;
        }
    
        .delete-button {
            padding: 6px 12px;
            background-color: #dc3545;
            border: none;
            color: white;
        }
    
        .delete-button:hover {
            background-color: #c82333;
        }
    </style>
    <form action="{{ url('/update/'.$items->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $items->name }}"><br><br>
        <label for="message">message:</label>
        <input type="text" name="message" id="message" value="{{ $items->message }}">
         
           <br><br>
        <button type="submit">Update</button>
    </form>
@endsection
