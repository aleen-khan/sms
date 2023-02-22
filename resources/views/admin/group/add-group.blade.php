@extends('admin.master')
@section('title')
    Add Group
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Group</h3></div>
                        <div class="card-body">
                            <form action="{{ route('add.group') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating">
                                    <label>Group Name</label>
                                    <input class="form-control" id="inputLastName" type="text" name="group_name" placeholder="Group Name" />
                                </div>
                                <div class="form-floating mb-3 mb-md-0">
                                        <label>Created By</label>
                                        <input class="form-control" name="created_by" type="text" placeholder="Created By" />
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

