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
<!-- 
                            <div class="form-group col-md-6">
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

                      

                          

                            

                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <!-- <input type="text" class="form-control" name="name" rows="3" > -->
                                <span class="input-group-text" >{{ Auth::user()->name }}</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" name="position" rows="3">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" name="location" rows="3">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tel">Tel</label>
                                <input type="text" class="form-control" name="tel" rows="3">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" rows="3">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="device">Device</label>
                                <input type="text" class="form-control" name="device" rows="3">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="deviceproblems">Device Problems</label>
                                <input type="text" class="form-control" name="device_problem" rows="3">
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
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <!-- <a href="{{route('request_all')}}"> request </a> -->
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection