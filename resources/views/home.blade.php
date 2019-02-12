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

                    <form>
                        <div class="form-row">
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
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <span class="input-group-text">{{ Auth::user()->email }}</span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Device</label>
                                <input type="device" class="form-control" id="device" placeholder="Device">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Device Problems</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                            <label for="inputPassword4">In case of : </label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="enereent" name="case"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="enereent">Enereent</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="urgent" name="case"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="urgent">Urgent</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="non-urgent" name="case"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="non-urgent">Non-Urgent</label>
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection