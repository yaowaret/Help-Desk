@extends('layouts.app_admin')

@section('content')

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h5> <span class="badge badge-success">Work has not been accepted.</span></h5>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card"> -->
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                        <th>
                            @if($problemslists->status == 0)
                            <span class="label label-info">Waiting for work</span>
                            @elseif($problemslists->status == 1)
                            <span class="label label-danger">Working...</span>
                            @else
                            <span class="label label-danger">Finish</span>
                            @endif

                        </th>
                        <td class="text-center">
                            <a class="btn btn-accept btn-sm" href="/admin/status/{{$problemslists->id }}"
                                onclick="return confirm('Are you sure to delete?')">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Accept</a></td>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <br>
    <br>

    <h5> <span class="badge badge-dark">Work that has not been done</span></h5>
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($problemslistworking as $key=>$problemslistworkings)

                        <td>{{ $problemslistworkings->created_at }}</td>
                        <td>{{ $problemslistworkings->device }}</td>
                        <td>{{ $problemslistworkings->device_problem }}</td>
                        <td>@if ($problemslistworkings->case == "Enereent")
                            <span class="badge badge-danger">Enereent</span>
                            @elseif ($problemslistworkings->case == "Urgent")
                            <span class="badge badge-warning">Urgent</span>
                            @elseif ($problemslistworkings->case == "Non-Urgent")
                            <span class="badge badge-success">Non-Urgent</span>
                            @endif
                        </td>
                        <th>

                            @if($problemslistworkings->status == 0)
                            <span class="label label-info">Waiting for work</span>
                            @elseif($problemslistworkings->status == 1)
                            <span class="label label-danger">Working</span>
                            @else
                            <span class="label label-danger">Finish</span>

                            @endif
                        </th>
                        <td></td>
                        <td class="text-center">
                        <a class="btn btn-accept btn-sm" href="/admin/finish/{{$problemslistworkings->id }}"
                                onclick="return confirm('Are you sure to finish?')">
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                Finish</a> ||
                            <a class="btn btn-danger btn-sm" href="/admin/status_cancel/{{$problemslistworkings->id }}"
                                onclick="return confirm('Are you sure to cancel?')">
                                <i class="fa fa-ban" aria-hidden="true"></i> Cancel</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection

<!-- Comment -->
<!-- MAIL_FROM_ADDRESS= sopmodzx@gmail.com
MAIL_FROM_NAME='Reset Passwod'  -->