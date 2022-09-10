@extends('users.layout')
@section('content')
<div class="row">
   <div class="col-lg-12">
    <h2>Edit Data</h2>
<a class="btn btn-info" href="{{route('users.index')}}">back</a>
   @if ($errors->any())
   <div class="alert alert-danger mt-3">
    All Fields are mandatory
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('users.update',$user->id)}}" method="post">
@csrf
@method('PUT')

<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="form-group">
<input type="text" name="name" class="form-control" value="{{ $user->name }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="form-group">
<input type="email" name="email" class="form-control" value="{{ $user->email }}">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 mt-3">
    <div class="form-group">
<button class="btn btn-success">Update</button>
</div>
</div>
</form>
    </div>
</div>
@endsection