@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h5>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <p> <b>Name: </b> {{ Auth::user()->name }} <b>Position: </b> {{ Auth::user()->position }} <b>Location: </b>
                {{ Auth::user()->location }}
        </h5>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                        <td></td>
                        <td></td>
                        <!-- <td>@if($problemslists->case==0)
                                    <b class="alert-danger"> Enereent </b>
                                    @else
                                    <b class="alert-success"> Urgent </b>
                                    @endif
                                </td> -->
                        <td class="text-center">
                            <a href="/problems_edit/{{$problemslists->id }}" class="btn btn-primary btn-sm"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></a> ||
                            <a class="btn btn-danger btn-sm" href="/delete/{{$problemslists->id }}"
                                onclick="return confirm('Are you sure to delete?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>

                        <td class="text-center"><a href="/problems_edit/{{$problemslists->id }}"
                                class="btn btn-secondary btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i>
                                Confirm</a></td>
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