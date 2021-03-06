@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Request Problems</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form mathod="POST" action="{{route('request_all')}}">
                        {{ csrf_field() }}
                        <div class="form-row">

                            <!-- <div class="form-group col-md-12">
                                <label for="user_id">ID</label>
                                <input type="text" class="form-control" value={{ Auth::user()->id }} name="user_id"
                                    rows="3" readonly>
                            </div> -->

                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value={{ Auth::user()->name }} name="name"
                                    rows="3" readonly>
                                <!-- <span class="input-group-text" >{{ Auth::user()->name }}</span> -->
                            </div>
                            <div class="form-group col-md-6">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" value={{ Auth::user()->position }}
                                    name="position" rows="3" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" value={{ Auth::user()->location }}
                                    name="location" rows="3" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tel">Tel</label>
                                <input type="text" class="form-control" value={{ Auth::user()->tel }} name="tel"
                                    rows="3" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" value={{ Auth::user()->email }} name="email"
                                    rows="3" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="device">Device</label>
                                <input type="text" class="form-control" name="device" rows="3"
                                    placeholder="Please Enter Your Device" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="deviceproblems">Device Problems</label>
                                <textarea type="text" class="form-control" name="device_problem" rows="3"
                                    placeholder="Please Enter Your Device Problems" required></textarea>
                            </div>

                            <div class="form-group col-md-12" align="center">
                                <label for="inputPassword4">In case of : </label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="enereent" name="case" value="Enereent"
                                        class="custom-control-input" required>
                                    <label class="custom-control-label" for="enereent">Enereent</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="urgent" name="case" value="Urgent"
                                        class="custom-control-input" required>
                                    <label class="custom-control-label" for="urgent">Urgent</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="non-urgent" name="case" value="Non-Urgent"
                                        class="custom-control-input" required>
                                    <label class="custom-control-label" for="non-urgent">Non-Urgent</label>
                                </div>
                            </div>

                        </div>
                        <center>
                            <button type="submit" onclick="return confirm('Are you sure to Submit?')"
                                class="btn btn-primary">Submit</button>
                            <button class="btn btn-danger" name="clear" type="reset">Cancle</button>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection