@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><i class="fa fa-laptop"></i>Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box green-bg">
                    <i class="fa fa-cloud"></i>
                    <div class="count">{{ count(auth()->user()->getContainers()) }}</div>
                    <div class="title">Container(s)</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="info-box red-bg">
                    <i class="fa fa-lock"></i>
                    <div class="count">{{ count(\App\Port::all()->where('in_use', false)) }}</div>
                    <div class="title">Port(s) left</div>
                </div>
            </div>
        </div>

        <hr />

        <div class="container-fluid">
            @if (count(auth()->user()->getContainers()) < 1)
                <h1>Create your Server</h1>
                <form style="padding: 20px; border: 2px solid black; background-color: white" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="type" style="font-weight: bold">Server Type:</label>
                        <input type="text" class="form-control" id="type" value="MCPE: Bedrock Edition" disabled>
                    </div>

                    <div class="form-group">
                        <label for="port" style="font-weight: bold">Runtime Port:</label>
                        <select class="form-control" id="port" name="port" required>
                            <option value="">Please select</option>
                            @foreach (\App\Port::all()->where('in_use', false) as $p)
                                <option value="{{ $p->port }}">{{ $p->port }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-danger">Create</button>
                </form>
            @else
                <table class="table">
                    <thead style="background-color: black;">
                    <tr>
                        <th style="color: white">Container ID</th>
                        <th style="color: white">Type</th>
                        <th style="color: white">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (auth()->user()->getContainers() as $container)
                        <tr>
                            <td>{{ $container->container_id }}</td>
                            <td>MCPE: Bedrock Edition</td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </section>
@endsection
