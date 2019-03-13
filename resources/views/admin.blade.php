


@extends('layouts.app_admin')

@section('content')

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h5> <span class="badge badge-success">Work has not been accepted.</span></h5>
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
                        <th>
                            @if($problemslists->status == 0)
                            <span class="label label-info">Waiting for work</span>
                            @elseif($problemslists->status == 1)
                            <span class="label label-danger">Working...</span>
                            @else
                            <span class="label label-danger">Finish</span>
                            @endif

                        </th>
                        <td>@if($problemslists->status == 0)
                            <form id="status-form-{{ $problemslists->id }}"
                                action="{{ route('problemslists.status',$problemslists->id) }}" style="display: none;"
                                method="POST">
                                @csrf
                            </form>
                            <button type="button" class="btn btn-accept btn-sm" onclick="if(confirm('Are you Accept?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $problemslists->id }}').submit();
                                                            }else {
                                                            event.preventDefault();
                                                            }"><i class="fa fa-check-square" aria-hidden="true"></i>
                                Accept</button>


                            @else
                            <form id="status-form-{{ $problemslists->id }}"
                                action="{{ route('problemslists.status',$problemslists->id) }}" style="display: none;"
                                method="POST">
                                @csrf
                            </form>
                            <button type="button" class="btn btn-accept btn-sm"><i
                                    class="material-icons">Finish</i></button>

                            @endif
                        </td>
                        <td class="text-center"><a href="/problems_edit/{{$problemslists->id }}"
                                class="btn btn-accept btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i>
                                Accept</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <span class="badge badge-dark">Work that has not been done</span>
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


                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach ($problemslistworking as $key=>$problemslistworkings)

                            <td>{{ $problemslistworkings->created_at }}</td>
                            <td>{{ $problemslistworkings->device }}</td>
                            <td>{{ $problemslistworkings->device_problem }}</td>
                            <td>{{ $problemslistworkings->case }}</td>
                            <th>

                                @if($problemslistworkings->status == 0)
                                <span class="label label-info">Waiting for work</span>
                                @elseif($problemslistworkings->status == 1)
                                <span class="label label-danger">Working</span>
                                @else
                                <span class="label label-danger">Finish</span>

                                @endif

                            </th>


                            <td>

                            </td>


                            <td>

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