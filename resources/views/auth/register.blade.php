@extends('layouts.auth-master')

@section('content')

<form action="/register" method="POST">
@csrf
  <h1>Create Accounr</h1>
  @include('layouts.partials.messages')
  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username" name="username">  
  <label for="username" class="form-label">Username</label>
  </div>

  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email Address" name="email">  
  <label for="email" class="form-label">Email address</label>
  </div>
  <div class="form-floating mb-3">
  <input type="password" class="form-control" id="password" name="password" placeholder="password" name="password">  
  <label for="password" class="form-label">Password</label>
  </div>
  <div class="form-floating mb-3">
  <input type="password" class="form-control" id="password_confirmatio" name="password_confirmation" placeholder="Password Confirmation" name="password_confirmation">  
  <label for="password_confirmatio" class="form-label">Password Confirmation</label>
  </div>
  <div class="mb-3">
    <a href="/login">Login</a>
  </div>
  <button type="submit" class="btn btn-primary">Regsitrar</button>
</form>
    
@endsection


