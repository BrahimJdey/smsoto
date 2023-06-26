@extends('home')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">Edit groupe</div>
<div class="card-body">
    <form action="{{ url('groupe/' .$groupe->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $groupe->id }}" id="id"/>
        <label>nom</label></br>
        <input type="text" name="name" id="name" value="{{ $groupe->name }}" class="form-control"/></br>

        <label>code</label></br>
        <input type="text" name="code" id="code" value="{{ $groupe->code }}" class="form-control"/></br> 

        <input type="submit" value="update"   class="btn btn-success"><br>
    </form>
</div>
</div>


@endsection