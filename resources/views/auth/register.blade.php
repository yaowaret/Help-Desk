@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required autofocus>
                                @if ($errors->has('position'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="position"
                                class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                            <div class="col-md-6">
                                <select id="position" type="position"
                                    class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}"
                                    name="position" value="{{ old('position') }}" required>
                                    <option value="">---Select Position--</option>
                                    <option value="HR">HR</option>
                                    <option value="PR">PR</option>
                                    <option value="Customer Relationship Officer">Customer Relationship Officer</option>
                                    <option value="Sales Assistant">Sales Assistant</option>
                                    @if ($errors->has('position'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location"
                                class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                            <div class="col-md-6">
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

                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="text"
                                    class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"
                                    value="{{ old('tel') }}" required autofocus>

                                @if ($errors->has('tel'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection