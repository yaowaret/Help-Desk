@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HELP</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form mathod="GET|HEAD" action="{{route('request_all')}}">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="form-row">



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


                            <!-- <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <span class="input-group-text">{{ Auth::user()->name }}</span>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Position</label>
                                <span class="input-group-text">{{ Auth::user()->position }}</span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Location</label>
                                <span class="input-group-text">{{ Auth::user()->location }}</span>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Tel</label>
                                <span class="input-group-text">{{ Auth::user()->tel }}</span>
                            </div> -->

                      
<!-- 
                            <div class="form-group col-md-6">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <span class="input-group-text" id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required >{{ Auth::user()->email }}</span>
                                    @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div> -->

                            <!-- <div class="form-group row">
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
                        </div> -->
                            <!-- <div class="form-group col-md-6">
                                <label for="inputEmail4">Device</label>
                                <input type="device" class="form-control" id="device" placeholder="Device">
                            </div> -->

                            <div class="form-group col-md-6">
                                <label for="device">{{ __('Device') }}</label>
                                <input id="device" type="text"
                                    class="form-control{{ $errors->has('device') ? ' is-invalid' : '' }}" name="device"
                                    value="{{ old('device') }}" required autofocus>

                                @if ($errors->has('device'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('device') }}</strong>
                                </span>
                                @endif    
                            </div>

                            <div class="form-group col-md-6">
                                <label for="device_problem">{{ __('Device Problem') }}</label>
                                <input id="device_problem" type="text"
                                    class="form-control{{ $errors->has('device_problem') ? ' is-invalid' : '' }}" name="device_problem"
                                    value="{{ old('device_problem') }}" required autofocus>

                                @if ($errors->has('device_problem'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('device_problem') }}</strong>
                                </span>
                                @endif    
                            </div>

                            <div class="form-group col-md-6">
                                <label for="case">{{ __('Case') }}</label>
                                <input id="case" type="text"
                                    class="form-control{{ $errors->has('case') ? ' is-invalid' : '' }}" name="case"
                                    value="{{ old('case') }}" required autofocus>

                                @if ($errors->has('case'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('case') }}</strong>
                                </span>
                                @endif    
                            </div>

                            <!-- <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Device Problems</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">In case of : </label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="enereent" name="case" class="custom-control-input">
                                    <label class="custom-control-label" for="enereent">Enereent</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="urgent" name="case" class="custom-control-input">
                                    <label class="custom-control-label" for="urgent">Urgent</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="non-urgent" name="case" class="custom-control-input">
                                    <label class="custom-control-label" for="non-urgent">Non-Urgent</label>
                                </div>
                            </div>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <!-- <a href="{{route('request_all')}}"> request </a> -->
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection