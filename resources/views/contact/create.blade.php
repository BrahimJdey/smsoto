@extends('home')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">create new contact</div>
<div class="card-body">
    <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="groupe_code">Groupe</label>
            <select name="groupe_code" class="form-control" required>
                <option value="">Sélectionnez un groupe</option>
                @foreach($groupe as $item)
                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" name="tags" class="form-control">
        </div>

        <input type="submit" value="Save"   class="btn btn-success"><br>
    </form>
</div>
</div>


@endsection