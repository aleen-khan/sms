{{-- @extends('admin.master') --}}
@extends('layouts.app')
@section('title')
    Sms History
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
                                <th>Number</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ( $messages as $chat )
                            <tr>
                                <td>{{ $chat->sender_id }}</td>
                                <td>{{ $chat->body }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
