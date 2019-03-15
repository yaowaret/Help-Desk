@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        
            <h5>
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <p> <b>Name: </b> {{ Auth::user()->name }} <b>Position: </b> {{ Auth::user()->position }} <b>Location:
                    </b>
                    {{ Auth::user()->location }}
            </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Device</th>
                        <th scope="col">Device Problems</th>
                        <th scope="col">In case of</th>
                        <th scope="col">Status</th>
                        <th scope="col">Authorities</th>
                        <th scope="col" class="text-center">Action</th>
                        <th scope="col" class="text-center">Confirm</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($problemslist as $problemslists)
                        <td>{{ $problemslists->created_at }}</td>
                        <td>{{ $problemslists->device }}</td>
                        <td>{{ $problemslists->device_problem }}</td>
                        <td>@if ($problemslists->case == "Enereent")
                            <span class="badge badge-danger">Enereent</span>
                            @elseif ($problemslists->case == "Urgent")
                            <span class="badge badge-warning">Urgent</span>
                            @elseif ($problemslists->case == "Non-Urgent")
                            <span class="badge badge-success">Non-Urgent</span>
                            @endif
                        </td>
                        <th>
                            @if($problemslists->status == 0)
                            <span class="label label-info">Waiting for confirmation</span>
                            @elseif($problemslists->status == 1)
                            <span class="label label-danger">Working...</span>
                            @elseif($problemslists->status == 2)
                            <span class="label label-danger">Please confirm</span>
                            @endif

                        </th>
                        <td class="text-center">{{$problemslists->authorities}}</td>
                        <!-- <td>@if($problemslists->case==0)
                                    <b class="alert-danger"> Enereent </b>
                                    @else
                                    <b class="alert-success"> Urgent </b>
                                    @endif
                                </td> -->
                        <td class="text-center">
                            @if($problemslists->status == 0)
                            <a href="/problems_edit/{{$problemslists->id }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ||
                            <a class="btn btn-danger btn-sm" href="/delete/{{$problemslists->id }}"
                                onclick="return confirm('Are you sure to delete?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            @elseif($problemslists->status == 1)
                            <a class="btn btn-not btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            ||
                            <a class="btn btn-not btn-sm">
                                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            @elseif($problemslists->status == 2)
                            <a class="btn btn-not btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            ||
                            <a class="btn btn-not btn-sm">
                                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            @endif
                        </td>

                        <td class="text-center"> @if($problemslists->status == 0)
                            <a class="btn btn-not btn-sm">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Confirm</a>
                            @elseif($problemslists->status == 1)
                            <a class="btn btn-not btn-sm">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Confirm</a>
                            @elseif($problemslists->status == 2)
                            <a class="btn btn-accept btn-sm" href="/user/confirm/{{$problemslists->id }}"
                                onclick="return confirm('Are you sure to Confirm?')">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Confirm</a> || <a class="btn btn-danger btn-sm"
                                href="/user/cancel/{{$problemslists->id }}"
                                onclick="return confirm('Are you sure to Cancel?')">
                                <i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                            @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-sm" a href="{{ route('problems') }}"><i class="fa fa-plus"
                    aria-hidden="true"></i>
                Request Problems</a>
        </div>
    </div>
</div>
</div>


@endsection

<!-- MAIL_FROM_ADDRESS= sopmodzx@gmail.com
MAIL_FROM_NAME='Reset Passwod'  -->