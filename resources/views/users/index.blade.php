@extends('users.layout')
@section('content')
<div class="row">
   <div class="col-lg-12">
    <h2>User Data</h2>
<a class="btn btn-info" href="{{route('users.create')}}">Create</a>

@if ($message = Session::get('success'))
<div calss="alert alert-success mt-3">
{{ $message }}
</div>
@endif
    <table class="table table-bordered">
<tr>
    <th>Sr</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>

@foreach($users as $user)
<tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
        <form action="{{ route('users.destroy',$user->id) }}" method="post">

        <a class="btn btn-info" href="{{ route('users.show',$user->id)}}">View</a>
        <a class="btn btn-info" href="{{ route('users.edit',$user->id)}}">Edit</a>
    
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</a>
    </td>

</tr>
@endforeach
    </table> 
    </div>
</div>
@endsection