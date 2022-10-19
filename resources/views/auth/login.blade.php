@extends('layouts.auth-master')

@section('content')
<form action="/login" method="POST">
@csrf
<h1>Login</h1>
@include('layouts.partials.messages')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <a href="/register">Create account</a>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
