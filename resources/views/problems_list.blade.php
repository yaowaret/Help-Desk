@extends('layouts.app')

@section('content')

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <p> <b>Name: </b> {{ Auth::user()->name }} <b>Position: </b> {{ Auth::user()->position }} <b>Location: </b>
        {{ Auth::user()->location }}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header"><p> <b>Name: </b> {{ Auth::user()->name }} <b>Position: </b> {{ Auth::user()->position }} <b>Location: </b>
        {{ Auth::user()->location }}</div> -->

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Device</th>
                                <th scope="col">Device Problems</th>
                                <th scope="col">In case of</th>
                                <th scope="col">Status</th>
                                <th scope="col">Authorities</th>
                                <th scope="col" class="text-center">Action</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($problemslist as $problemslists)
                                <td>{{ $problemslists->created_at }}</td>
                                <td>{{ $problemslists->device }}</td>
                                <td>{{ $problemslists->device_problem }}</td>
                                <td>{{ $problemslists->case }}</td>
                                <td>@if($problemslists->case==0)
                                    <b class="alert-danger"> Enereent </b>
                                    @else
                                    <b class="alert-success"> Urgent </b>
                                    @endif
                                </td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="/problems_edit/{{$problemslists->id }}" class="btn btn-warning btn-sm"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ||
                                    <a class="btn btn-danger btn-sm" href="/delete/{{$problemslists->id }}"
                                        onclick="return confirm('Are you sure to delete?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                </td>
                                <td class="text-center"><a href="/problems_edit/{{$problemslists->id }}"
                                        class="btn btn-secondary btn-sm"><i class="fa fa-check-square"
                                            aria-hidden="true"></i> Confirm</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- <a href="{{ route('problems') }}" class="btn btn-info">Back</a> -->
                    </table>
                </div>
            </div>
        </div> <br>
        <a class="btn btn-primary btn-sm" a href="{{ route('problems') }}"><i class="fa fa-plus" aria-hidden="true"></i>
            Request Problems</a>

</div>
@endsection

<!-- MAIL_FROM_ADDRESS= sopmodzx@gmail.com
MAIL_FROM_NAME='Reset Passwod'  -->