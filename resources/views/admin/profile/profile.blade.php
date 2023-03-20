{{-- @extends('admin.master') --}}
@extends('layouts.app')
@section('title')
    Profile
@endsection
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-2 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">Admin</span><span class="text-black-50">admin@mail.com</span><span>
                    </span>
                </div>
            </div>
            <div class="col-md-10">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"
                                placeholder="first name" value=""></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                class="form-control" value="" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                class="form-control" placeholder="enter phone number" value="">
                        </div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                class="form-control" placeholder="enter email id" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Password</label>
                            <input type="text" class="form-control" placeholder="password" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Confirm Password</label>
                            <input type="text" class="form-control" placeholder="confirm password" value="">
                        </div>
                        {{-- <div class="col-md-12">
                            <label class="labels">Postcode</label>
                            <input type="text" class="form-control" placeholder="enter address line 2" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">State</label>
                            <input type="text" class="form-control" placeholder="enter address line 2" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Area</label>
                            <input type="text" class="form-control" placeholder="enter address line 2" value="">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Education</label>
                            <input type="text" class="form-control" placeholder="education" value="">
                        </div> --}}
                    </div>
                    {{-- <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="country" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">State/Region</label>
                            <input type="text" class="form-control" value="" placeholder="state">
                        </div>
                    </div> --}}
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection