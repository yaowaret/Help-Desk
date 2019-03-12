@extends('layouts.app_admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <tbody>
                    <tr>
                        @foreach ($problemslist as $problemslists)
                        <p><b>Name : </b>{{ $problemslists->name }}</p>
                        <p><b>Position : </b>{{ $problemslists->position }}</p>
                        <p><b>Location : </b>{{ $problemslists->location }}</p>
                        <p><b>Device : </b>{{ $problemslists->device }}</p>
                        <p><b>Device Problems : </b>{{ $problemslists->device_problem }}</p>
                        <p><b>Im case of : </b>{{ $problemslists->case }}</p>
                        <p><b>Im case of : </b>{{ $problemslists->case }}</p>
                        <p><b>Im case of : </b>{{ $problemslists->case }}</p>

                    </tr>
                    @endforeach
                </tbody>
            </div>
        </div> 
        <br><a href="{{ route('manage') }}" class="btn btn-danger">Back</a>
    </div>
</div>


@endsection

<!-- MAIL_FROM_ADDRESS= sopmodzx@gmail.com
MAIL_FROM_NAME='Reset Passwod'  -->