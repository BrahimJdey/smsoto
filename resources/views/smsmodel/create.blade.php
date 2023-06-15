<!-- resources/views/items/create.blade.php -->
@extends('home')

@section('content')
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

    label ,form {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
         
        border-collapse: collapse;
    }

    input {
        background-color: #f2f2f2;
    }

     

     
</style>
    <h1>Create New smsmodel</h1>

    <form action="{{ url('/store') }}" method="POST">
        @csrf
        <label for="t_title">Name:</label>
        <input type="text" name="t_title" id="t_title"><br><br>
        <label for="t_text">Content:</label>
        <input type="text" name="t_text" id="t_text">
         
        <br><br>
        <button type="submit">save</button>
    </form>
@endsection
