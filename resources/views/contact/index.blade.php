@extends('home')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>contact</h2>
                    
                </div>
                <!-- 
                <div class="search-form">
                    <div>
                        <div> 
                            <button type="submit" class="search-button">Rechercher</button>
                            <input type="text" name="keyword" class="search-input" placeholder="Recherche...">
                        </div>
                    </div>
                </div>
            -->
                <div class="card-body"> 
                    
                   <a href="{{ url('contact/create') }}"   title="Add"><i class="fa fa-plus"></i></a>
                   <a href="{{ url('imp') }}"   title="import"><i class="fas fa-file-import"></i></a>
                   <a href="{{ url('export') }}"   title="export"><i class="fa fa-download"></i></a>
                   <a href="{{ url('groupe') }}" class="btn btn-success btn-sm" title="groupe"><i class="fas fa-users"></i></a>
                </div>
                <br><br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>nom</th>
                                <th>numero tel</th>
                                <th>email</th>
                                <th>groupe code</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            
                            @foreach ($contact as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @foreach ($item->groupes as $groupe)
                                         {{ $groupe->name }}
                                    @endforeach
                                </td>
                                <td>
                                    
                                    <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="edit contact"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit</button></a>
                                    <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline" >
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete contact" onclick="return confirm("confirm delete")"><i class="fa fa-trash-o" aria-hidden="true"></i>delete</button>
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

