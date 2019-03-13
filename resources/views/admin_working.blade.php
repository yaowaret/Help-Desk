

<h5> <span class="badge badge-dark">Work that has not been done.</span></h5>
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach ($problemslistworking as $key=>$problemslistworkings)

                            <td>{{ $problemslistworkings->created_at }}</td>
                            <td>{{ $problemslistworkings->device }}</td>
                            <td>{{ $problemslistworkings->device_problem }}</td>
                            <td>{{ $problemslistworkings->case }}</td>
                            <!-- <td>@if ($problemslistworkings->case == "Enereent")
                                <span class="badge badge-danger">Enereent</span>
                                @elseif ($problemslists->case == "Urgent")
                                <span class="badge badge-warning">Urgent</span>
                                @elseif ($problemslists->case == "Non-Urgent")
                                <span class="badge badge-success">Non-Urgent</span>
                                @endif
                            </td> -->
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
                    
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>

    </div>