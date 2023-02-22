@extends('admin.master')
@section('title')
    Manage Contact
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
                                 {{-- {{ dd($members) }} --}}
                                <th>Contact Name</th>
                                <th>Contact Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $members as $contact )
                            <tr>
                                <td>{{ $contact->contact_name }}</td>
                                <td>{{ $contact->contact_number }}</td>
                                <td>
                                    <a href="{{ route('edit.member', ['id'=>$contact->id]) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('delete.member', ['id'=>$contact->id]) }}" class="btn btn-danger">Delete</a>
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
