@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="login-page">
            
            <div class="form">
                <form class="register-form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <input id="name" type="text"  type="text" placeholder="name" name="name" value="{{ old('name') }}" required autofocus/>
                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input id="email" type="email" type="text" placeholder="email address" name="email" value="{{ old('email') }}" required/>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input id="password" type="password" placeholder="password" name="password" required/>

                    <input id="password-confirm" type="password" placeholder="confirm password" name="password_confirmation" required/>
                    
                    <button type="submit">create</button>
                    <p class="message">Already registered? <a href="{{ url('/login') }}">Sign In</a></p>
                </form>
            </div>
        </div>    
    </div>

    
</div>
@endsection
