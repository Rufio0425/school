@extends('layout')

@section('main')
<h1>View User</h1>
<div>Name: {{$user->first_name}} {{$user->last_name}}</div>
<div>Email:{{$user->email}}</div>
<div>Phone:{{$user->phone}}</div>
<a href="{{$user->id}}/update">Edit</a> <a href="{{$user->id}}/delete">Delete</a>
@endsection