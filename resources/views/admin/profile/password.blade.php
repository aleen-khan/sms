@extends('admin.master')
@section('title')
    Password Settings
@endsection
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Password Settings</h4>
                    </div>

                    <div class="row mt-3">

                        <div class="col-md-12">
                            <label class="labels">Current Password</label>
                            <input type="text" class="form-control" placeholder="current password" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">New Password</label>
                            <input type="text" class="form-control" placeholder="new password" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Confirm New Password</label>
                            <input type="text" class="form-control" placeholder="confirm new password" value="">
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
                        <button class="btn btn-primary profile-button" type="button">Save Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
