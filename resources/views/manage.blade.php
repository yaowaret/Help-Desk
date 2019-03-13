@extends('layouts.app_admin')

@section('content')

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <p> <b>Admin Manage</b>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Device Problems</th>
                            <th scope="col">In case of</th>
                            <th scope="col">Status</th>
                            <th scope="col">Finish</th>
                            <th scope="col">Authorities</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($problemslist as $problemslists)
                            <td>{{ $problemslists->id }}</td>
                            <td>{{ $problemslists->name }}</td>
                            <td>{{ $problemslists->created_at }}</td>
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
                            <td class="text-center"><a href="/problems_edit/{{$problemslists->id }}"
                                    class="btn btn-secondary btn-sm"><i class="fa fa-check-square"
                                        aria-hidden="true"></i>
                                    Finish</a></td>
                            <td></td>
                            <td class="text-center"> <a href="/view_problemslist/{{$problemslists->id }}"
                                    class="btn btn-view btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a> ||
                                <a class="btn btn-danger btn-sm" href="/delete/{{$problemslists->id }}"
                                    onclick="return confirm('Are you sure to delete?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!-- <a href="{{ route('problems') }}" class="btn btn-info">Back</a> -->
                </table>
            </div>
        </div>
</div> <br>
</div>

@endsection

<!-- MAIL_FROM_ADDRESS= sopmodzx@gmail.com
MAIL_FROM_NAME='Reset Passwod'  -->