<!-- resources/views/items/create.blade.php -->
@extends('home')

@section('content')
    <h1>Create New sms programmer</h1>

    <form action="{{ url('/items') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="message">message:</label>
        <input type="text" name="message" id="message"><br><br>
        <label for="schedule_rule">Schedule Rule:</label>
        <select name="schedule_rule" id="schedule_rule">
            <option value="1">Once</option>
            <option value="2">Annually</option>
            <option value="3">Daily</option>
            <option value="4">Weekly</option>
            <option value="5">Monthly</option>
            <!-- Add more options as needed -->
        </select>
        <br><br>
        <button type="submit">save</button>
    </form>
@endsection
