@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">Login</div>

        <div class="card-block">
          <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} row">
              <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                  <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }} row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                  <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">Login</button>

                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
