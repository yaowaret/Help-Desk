@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">My Profile</h5>
            <div class="card-body">
                <tbody>
                    <tr>
                        <p><b>Name : </b>{{ Auth::user()->name }}</p>
                        <p><b>Position : </b>{{ Auth::user()->position }}</p>
                        <p><b>Location : </b>{{ Auth::user()->location }}</p>
                        <p><b>Tel : </b>{{ Auth::user()->tel }}</p>
                        <p><b>Email : </b>{{ Auth::user()->email }}</p>

                    </tr>
                </tbody>
            </div>
        </div>
        <br>
        <a href="/profile" class="btn btn-primary">Edit Profile</a>
        <a href="/problems_list" class="btn btn-danger">Back</a>
    </div>
</div>


@endsection

<!-- MAIL_FROM_ADDRESS= sopmodzx@gmail.com
MAIL_FROM_NAME='Reset Passwod'  -->