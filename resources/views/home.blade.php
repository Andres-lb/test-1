@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello&nbsp<strong>{{ Auth::user()->title }}&nbsp{{ ucwords(Auth::user()->name) }}</strong>{{ __(' you are logged in!') }}<br><br>
                    <p >You can logout or view all users 
                        by clicking on your name on the 
                        bottom of the page in the navigation bar  </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
