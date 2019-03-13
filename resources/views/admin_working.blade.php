<div class="container">
    <br>
    <br>
    <br>
    <br>

    <span class="badge badge-dark">Work that has not been done</span>
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
                                @if($problemslistworkings->status == 1)
                                <form id="status-form-{{ $problemslists->id }}"
                                    action="{{ route('problemslists.status',$problemslists->id) }}"
                                    style="display: none;" method="POST">
                                    @csrf
                                </form>
                                <button type="button" class="btn btn-success btn-sm" onclick="if(confirm('Are you Finish?'))"><i class="material-icons">Finish</i></button>
                                @endif
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>

    </div>