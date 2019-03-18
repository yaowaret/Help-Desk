@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form mathod="POST" action="{{route('update_profile',$problemslist->id)}}">
                        {{ csrf_field() }}
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name"
                                    rows="3" required>
                                <!-- <span class="input-group-text" >{{ Auth::user()->name }}</span> -->
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Position</label>
                                <select id="position" type="position"
                                    class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}"
                                    name="position" value="{{ old('position') }}" required>
                                    <option value="">---Select Position--</option>
                                    <option value="HR">HR</option>
                                    <option value="PR">PR</option>
                                    <option value="Customer Relationship Officer">Customer Relationship Officer
                                    </option>
                                    <option value="Sales Assistant">Sales Assistant</option>
                                    @if ($errors->has('position'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Position</label>
                                <select id="location" type="location"
                                    class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}"
                                    name="location" value="{{ old('location') }}" required>
                                    <option value="">---Select Location--</option>
                                    <option value="Floor1">Floor1</option>
                                    <option value="Floor3">Floor3</option>
                                    <option value="Floor5">Floor5</option>
                                    <option value="Floor7">Floor7</option>
                                    @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tel">Tel</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->tel }}" name="tel"
                                    rows="3"required >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email"
                                    rows="3" required>
                            </div>
                            


                        </div>
                        <button type="submit" onclick="return confirm('Are you sure to Update?')"
                            class="btn btn-primary">Submit</button>
                        <a href="/problems_list" class="btn btn-danger">Cancle</a>
                        <!-- <button href="{{ route('problems_list') }}"
                            class="btn btn-primary">Submit</button> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection