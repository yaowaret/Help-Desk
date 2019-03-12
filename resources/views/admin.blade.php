@extends('layouts.app_admin')

@section('content')

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <p> <b>Work has not been accepted.</b>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- <div class="card"> -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Device</th>
                            <th scope="col">Device Problems</th>
                            <th scope="col">In case of</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Action</th>
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
                            <td class="text-center"><a href="/problems_edit/{{$problemslists->id }}"
                                    class="btn btn-success btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i>
                                    Accept</a></td>
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