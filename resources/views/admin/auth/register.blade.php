@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">Register</div>

        <div class="card-block">
          <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} row">
              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                  <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} row">
              <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                  <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6  offset-md-4">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
