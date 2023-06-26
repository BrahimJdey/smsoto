@extends('home')
@section('content')

<div class="card" style="margin:20px">

<div class="card-header">groupe page</div>
<div class="card-body">
   <div class="card-body">
    <h5 class="card-title">name: {{ $groupe->name }}</h5>
    <p class="card-text">code: {{ $groupe->code }} </p>
   </div>
</div>
</div>



@endsection