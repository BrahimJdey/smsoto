@extends('home')
@section('content')
<!-- resources/views/items/index.blade.php -->
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
    <h3>Mes messages de fonctionnalité</h3>
    <div class="search-form">
        <div>
            <div> 
                <button type="submit" class="search-button">Rechercher</button>
                <input type="text" name="keyword" class="search-input" placeholder="Recherche...">
            </div>
        </div>
    </div>
    

    <table>
        <thead>
            <tr>
                <th>Form</th>
                <th>Keyword</th>
                <th>content</th>
                 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             
        </tbody>  
    </table>
 




@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#items-table').DataTable({
        dom: 'Bfrtip', // Ajouter les boutons d'exportation
        buttons: [
            'csv', 'excel', 'pdf', 'print' // Les formats d'exportation disponibles
        ]
    });
});
</script>
@endsection