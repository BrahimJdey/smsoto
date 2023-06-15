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
<!-- resources/views/items/index.blade.php -->
 
    <h1>programmer SMS</h1>
    <a href="{{ url('/create') }}" class="btn btn-primary add-button"><i class="fas fa-plus"></i></a>

    <table>
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Content</th>
                 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                
                    <td>{{ $item->t_title }}</td>
                    <td>{{ $item->t_text }}</td>
                     
                    <td>
             
                        <form action="{{ url('destroy', [$item->id]) }}" method="POST">
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