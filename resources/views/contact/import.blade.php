@extends('home')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
<form action="{{ url('import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Importer</button>
</form>
</div>
</div>
@endsection
