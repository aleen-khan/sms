@extends('admin.master')
@section('title')
    Send Sms
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Message</h3></div>
                        <div class="card-body">
                            <form action="{{route('single.message')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <label>Choose a Group:</label>
                                            <select name="" id="">
                                                <option value="">Family</option>
                                                <option value="">Friends</option>
                                                <option value="">Colleague</option>
                                                <option value="">Little Brother</option>
                                                <option value="">Backbencher</option>
                                                <option value="">Little</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card form-floating mb-3 mb-md-0">
                                            <label>Choose a Contact:</label>
                                            <select name="" id="">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label>Number</label>
                                            <input class="form-control" name="number" type="text" placeholder="Number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mt-3 mb-md-0">
                                            <label>SMS Body</label>
                                            <textarea  class="form-control" name="message" type="textarea" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
