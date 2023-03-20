@extends('layouts.app')
@section('title')
    Add Contact
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Contact</h3></div>
                        <div class="card-body">
                            <form action="{{ route('add.member') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="group" aria-label="Default select example">
                                        <option selected>Select Group</option>
                                        @foreach ( $groups as $team )
                                        <option value="{{ $team['id'] }}">{{ $team['group_name'] }}</option>
                                        @endforeach                                            
                                    </select>    
                                    
                                    <label>Choose a Group:</label>
                                    
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="contact_name"  placeholder="Contact Name">
                                    <label>Contact Name</label>                                        
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="contact_number"  placeholder="Contact Number">
                                    <label>Contact Number</label>                                        
                                </div>                       
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Save</button>
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

