@extends('layouts.app_admin')

@section('content')

<div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <p> <b>Work has not been accepted.</b>
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
                                <td class="text-center"> <button type="button" class="btn btn-info btn-sm"
                                        data-toggle="modal" data-target="#myModal">View</button></td>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Modal Header</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the modal.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- <td class="text-center"><a href="/problems_edit/{{$problemslists->id }}"
                                        class="btn btn-success btn-sm"><i class="fa fa-check-square"
                                            aria-hidden="true"></i> Accent</a></td> -->
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