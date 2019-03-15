@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <tbody>
                    <tr>
                        <p><b>Name : </b>{{ Auth::user()->name }}</p>
                        <p><b>Position : </b>{{ Auth::user()->position }}</p>
                        <p><b>Location : </b>{{ Auth::user()->location }}</p>
                    </tr>
            
                </tbody>
            </div>
        </div> 
        <br><a href="{{ route('profile') }}" class="btn btn-danger">Back</a>
    </div>
</div>


@endsection

<!-- MAIL_FROM_ADDRESS= sopmodzx@gmail.com
MAIL_FROM_NAME='Reset Passwod'  -->