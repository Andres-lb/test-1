@extends('layouts.app')
<head>
         <title>All users</title>
         </head>

@section('content')
    <head>
      
        
        <title>users</title>
    </head>


<table class="table table-hover ">
  <thead class="bg-info">
    <head><strong>Users</strong></head>
    <tr>
      
      <th >Full name</th>
      <th >Email</th>
      <th >Phone</th>
      <th ></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      
      <td>{{$user->name}} &nbsp {{$user->lname}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td><a href="/allusers/{{$user->id}}" class="btn btn-info btn-md " >Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    
        @endsection
