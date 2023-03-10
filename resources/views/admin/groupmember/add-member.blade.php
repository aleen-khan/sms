@extends('admin.master')

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
                                <div class="form-floating">
                                    <label>Choose a Group:</label>
                                    <select name="group" id="">
                                        <option value="">Select Group</option>
                                    @foreach($groups as $team)
                                    <option value="{{ $team['id'] }}">{{ $team['group_name'] }}</option>
                                    @endforeach

                                    </select>
                                </div>
                                <div class="form-floating">
                                    <label>Contact Name</label>
                                    <input class="form-control" id="inputLastName" type="text" name="contact_name" placeholder="Contact Name" />
                                </div>
                                <div class="form-floating mb-3 mb-md-0">
                                        <label>Contact Number</label>
                                        <input class="form-control" name="contact_number" type="text" placeholder="Contact Number" />
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

