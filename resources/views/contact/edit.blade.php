@extends('home')
@section('content')

<div class="card" style="margin: 20px;">
<div class="card-header">Edit contact</div>
<div class="card-body">
    <form action="{{ url('contact/' .$contact->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $contact->id }}" id="id"/>
        <label>nom</label></br>
        <input type="text" name="name" id="name" value="{{ $contact->name }}" class="form-control"/></br>

        <label>mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{ $contact->mobile }}" class="form-control"/></br> 

        <label>tags</label></br>
        <input type="text" name="tags" id="tags" value="{{ $contact->tags }}" class="form-control"/></br> 

        <input type="submit" value="update"   class="btn btn-success"><br>
    </form>
</div>
</div>


@endsection