@extends('layouts.app')
@section('title')
    Edit Contact
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Edit Contact</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update.member') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $members->id }}">
                                <div class="mb-3">
                                    <label>Contact Name</label>
                                    <input type="text" class="form-control" name="contact_name"
                                        value="{{ $members->contact_name }}" placeholder="Contact Name">                                    
                                </div>
                                <div class="mb-3">
                                    <label>Contact Number</label>
                                    <input type="number" class="form-control" name="contact_number"
                                        value="{{ $members->contact_number }}" placeholder="Contact Number">                                    
                                </div>
                                <div class="mt-2 mb-0">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <button type="submit" class="btn btn-primary mb-1">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
