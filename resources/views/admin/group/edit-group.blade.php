@extends('admin.master')
@section('title')
    Edit Group
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Group</h3></div>
                        <div class="card-body">
                            <form action="{{ route('update.group') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating">
                                    <label>Group Name</label>
                                    <input type="hidden" name="id" value="{{ $groups->id }}">
                                    <input class="form-control" id="inputLastName" type="text" name="group_name" value="{{ $groups->group_name }}" placeholder="Group Name" />
                                </div>
                                <div class="form-floating mb-3 mb-md-0">
                                        <label>Description</label>
                                        <input class="form-control" name="description" type="text"  value="{{ $groups->description }}" placeholder="description" />
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

