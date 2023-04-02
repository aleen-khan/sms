@extends('layouts.app')
@section('title')
    Add Contact
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Add Contact</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.member') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Choose a Group:</label>
                                    
                                    <select class="form-select" name="group" aria-label="Default select example">
                                        <option selected>Select Group</option>
                                        @foreach ($groups as $team)
                                            <option value="{{ $team['id'] }}">{{ $team['group_name'] }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="mb-3">
                                    <label>Contact Name</label>
                                    <input type="text" class="form-control" name="contact_name"
                                        placeholder="Contact Name">                                    
                                </div>
                                <div class="mb-3">
                                    <label>Contact Number</label>
                                    <input type="number" class="form-control" name="contact_number"
                                        placeholder="Contact Number">                                    
                                </div>
                                <div class="mt-2 mb-0">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <button type="submit" class="btn btn-primary mb-1">
                                            Save
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
