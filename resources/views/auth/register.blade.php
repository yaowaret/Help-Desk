@extends('layouts.app')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form action="#" name="myForm" method="post" onsubmit="return(validate());">
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="well center-block">
                    <div class="well-header">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h3 class="text-center text-success"> Register Here! </h3>
                            <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <!-- <input type="text" placeholder="First Name" name="txtfname" class="form-control"> -->
                                    <input id="name" type="text" placeholder="Name"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <select id="position" type="position"
                                        class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}"
                                        name="position" value="{{ old('position') }}" required>
                                        <option value="">---Select Position--</option>
                                        <option value="HR">HR</option>
                                        <option value="PR">PR</option>
                                        <option value="Customer Relationship Officer">Customer Relationship Officer
                                        </option>
                                        <option value="Sales Assistant">Sales Assistant</option>
                                        @if ($errors->has('position'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('position') }}</strong>
                                        </span>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <select id="location" type="location"
                                        class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"
                                        name="location" value="{{ old('location') }}" required>
                                        <option value="">---Select Location--</option>
                                        <option value="Floor1">Floor1</option>
                                        <option value="Floor3">Floor3</option>
                                        <option value="Floor5">Floor5</option>
                                        <option value="Floor7">Floor7</option>
                                        @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    <input id="tel" type="text" placeholder="Mobile No."
                                        class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"
                                        value="{{ old('tel') }}" required autofocus>

                                    @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    <input id="email" type="email" placeholder="E-Mail"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                    <input id="password-confirm" type="password" placeholder="Confirm Password"
                                        class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row widget">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <!-- <button class="btn btn-warning btn-block"> Submit </button> -->
                            <button type="submit" class="btn btn-warning btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection