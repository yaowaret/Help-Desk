@extends('layouts.app')

@section('content')

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <p> <b>Name: </b> {{ Auth::user()->name }} <b>Position: </b> {{ Auth::user()->position }} <b>Location: </b>
        {{ Auth::user()->location }}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Device</th>
                                <th scope="col">Device Problems</th>
                                <th scope="col">In case of</th>
                                <th scope="col">Status</th>
                                <th scope="col">Authorities</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($problemslist as $problemslists)
                                <td>{{ $problemslists->created_at }}</td>
                                <td>{{ $problemslists->device }}</td>
                                <td>{{ $problemslists->device_problem }}</td>
                                <td>{{ $problemslists->case }}</td>
                                <td></td>
                                <td></td>
                                <td> <a href="/delete/{{$problemslists->id }}"
                                        onclick="return confirm('Are you sure to delete?')"
                                        class="btn btn-outline-danger">Delete</a> </td>
                                <td> <a href="/edit/{{$problemslists->id }}"
                                       class="btn btn-outline-info">Edit</a> </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('problems') }}" class="btn btn-info">Back</a>

                </div>
            </div>
        </div>
</div>
@endsection