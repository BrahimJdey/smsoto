@extends('home')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">create new groupe</div>
<div class="card-body">
    <form action="{{ url('groupe') }}" method="post">
        {!! csrf_field() !!}
        <label> nom</label><br>
        <input type="text" name="name" id="name" class="form-control"><br>
        <label> code</label><br>
        <input type="text" name="code" id="code" class="form-control"><br>
        <input type="submit" value="Save"   class="btn btn-success"><br>
    </form>
</div>
</div>


@endsection