@extends('users.layout')
@section('content')
<div class="row">
   <div class="col-lg-12 mt-5">
    <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
   <table class="table table-bordered mt-5">
<tr>
    <td>Name</td>
    <td>Email</td>
</tr>
<tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
</tr>
</table>
    </div>
</div>
@endsection