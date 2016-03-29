@extends('layouts.app')

@section('content')
        <!-- intro start -->
        <section id="intro" class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Doctors</h1>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-1">Id</th>
                                    <th>Name</th>
                                    <th class="col-md-2">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{ $doctor->id }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>Options</td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <h1>Clients</h1>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-1">Id</th>
                                    <th>Name</th>
                                    <th class="col-md-2">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>Options</td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <h1>Appointments</h1>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="col-md-1">Id</th>
                                    <th>Name</th>
                                    <th class="col-md-2">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->id }}</td>
                                    <td>{{ $appointment->name }}</td>
                                    <td>{{ $appointment->email }}</td>
                                    <td>{{ $appointment->phone }}</td>
                                    <td>Options</td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <!-- intro close -->
@endsection
