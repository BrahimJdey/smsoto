@extends('home')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Groupe</h2>
                    
                </div>
                <div class="search-form">
                    <div>
                        <div> 
                            <button type="submit" class="search-button">Rechercher</button>
                            <input type="text" name="keyword" class="search-input" placeholder="Recherche...">
                        </div>
                    </div>
                </div>
                <div class="card-body"> 
                   <a href="{{ url('groupe/create') }}" class="btn btn-success btn-sm" title="Add">Add</a>
                   <a href="{{ url('contact') }}" class="btn btn-success btn-sm" title="Retour">Retour</a>
                </div>
                <br><br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>nom</th>
                                <th>groupe code</th>
                            
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($groupe as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->code }}</td>
                                <td>
                                    <a href="{{ url('/groupe/' . $item->id) }}" title="view contact"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>view</button></a>
                                    <a href="{{ url('/groupe/' . $item->id . '/edit') }}" title="edit groupe"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit</button></a>
                                    <form method="POST" action="{{ url('/groupe' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline" >
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete contact" onclick="return confirm("confirm delete")"> <i class="fa fa-trash-o" aria-hidden="true"></i>delete</button>
                                    </form>
                                </td>
                            </tr>
                                
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

