@extends('layouts.app')
@section('title')
    Message Info
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3"></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Group</th>
                                <th>Contact</th>
                                <th>Number</th>
                                <th>Message</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($receivers) > 0)
                                @foreach ($receivers as $receiver)
                                    <tr>
                                        <td>{{ $receiver['group'] }}</td>
                                        <td>{{ $receiver['name'] }}</td>
                                        <td>{{ $receiver['number'] }}</td>
                                        <td>{{ $receiver['message'] }}</td>
                                        <td>{{ $receiver['status'] }}</td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
