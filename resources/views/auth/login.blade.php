@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="login-page">
            <div class="form">
                <form class="form-horizontal login-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    @if ($errors->has('email'))
                        <span class="help-block has-warning">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input id="email" name="email" type="email" placeholder="email" value="{{ old('email') }}" required autofocus/>
                    @if ($errors->has('password'))
                        <span class="help-block has-warning">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input id="password" name="password" placeholder="password" type="password" required>
                    <button type="submit">login</button>
                    <p class="message">Not registered? <a href="{{ route('register') }}">Create an account</a></p>
                    <p class="message">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </p>
                </form>
            </div>
        </div>    
    </div>
</div>
@endsection
