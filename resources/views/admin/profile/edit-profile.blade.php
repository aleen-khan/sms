@extends('layouts.app')
@section('title')
    Edit Profile
@endsection
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <form action="{{ route('edit.profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="first name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Email ID</label>
                                <input type="text" class="form-control" placeholder="enter email id" readonly
                                    value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Mobile Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="enter phone number"
                                    value="{{ Auth::user()->phone }}">
                            </div>

                            <div class="col-md-6">
                                <label class="labels">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="enter address"
                                    value="{{ Auth::user()->address }}">
                            </div>


                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection