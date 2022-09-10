@extends('users.layout')
@section('content')
<div class="row">
   <div class="col-lg-12">
    <h2>User Data</h2>
<a class="btn btn-info" href="{{route('users.index')}}">back</a>
   
<form action="{{ route('users.store')}}" method="post">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Enter Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="form-group">
<input type="password" name="password" class="form-control" placeholder="********">
</div></div>
<button class="btn btn-success mt-4">Submit</button>
</form>
    </div>
</div>
@endsection