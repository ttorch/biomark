@extends('layouts.default')

@section('content')
    @include('include.common.navbar')
    <h2>Profile</h2>
    <div class="form-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="form">
                    <form method="POST" action="{{$action}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        @if( !empty($method) && in_array($method, ["PUT", "PATCH", "DELETE"]) )
                            {{ method_field($method) }}
                        @endif
                        
                        {{ csrf_field() }}
                        @include('partials.profile.form')
                        <button type="submit" class="btn btn-info pull-right">{{ $submit_text }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection