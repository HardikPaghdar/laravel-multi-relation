@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Welcome
                        @if (auth()->check())
                            <strong>
                                {{ auth()->user()->name }}
                            </strong>
                        @endif
                    </div>

                    <div class="panel-body">
                        @if (auth()->guest())
                            To access all the menu,
                            you need to
                            <a href="/register">register</a> new account.
                            You will automatically logged in after registered.
                        @else
                            Now, you can access
                            all the menu
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
