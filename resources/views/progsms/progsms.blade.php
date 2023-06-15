@extends('home')
@section('content')
<!-- resources/views/items/index.blade.php -->
<style>
    .container {
        margin-top: 20px;
    }

    h1,button {
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
    <h1>programmer SMS</h1>
    <button><a href="{{ url('/progsms/create') }}">Add</a></button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>message</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->schedule_rule }}</td>
                    <td>
                        <a href="{{ url('/items/'.$item->id) }}">View</a>
                        <a href="{{ url('/items/'.$item->id.'/edit') }}">Edit</a>
                        <form action="{{ url('/progsms/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>  
    </table>
 




@endsection