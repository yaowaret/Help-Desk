@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Device</th>
                            <th scope="col">Device Problems</th>
                            <th scope="col">In case of</th>
                            <th scope="col">Status</th>
                            <th scope="col">Authorities</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($problemslist as $problemslists)
                            <td>{{ $problemslists->created_at }}</td>
                            <td>{{ $problemslists->device }}</td>
                            <td>{{ $problemslists->device_problem }}</td>
                            <td>{{ $problemslists->case }}</td>
                            <td>{{ $problemslists->id }}</td>
                            <td>{{ $problemslists->id }}</td>
                            <td><button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                </button> <button type="button" class="btn btn-default btn-sm">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.trigger('confirm');
            }
        });


        $(document).on('confirm', function (e) {
            var ele = e.target;
            e.preventDefault();


            $.ajax({
                url: ele.href,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });


            return false;
        });
    });
</script>
                <!-- 
                <table border=1>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                    </tr>
                    @foreach ($problemslist as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    @endforeach
                </table> -->
            </div>
        </div>
    </div>
</div>
@endsection