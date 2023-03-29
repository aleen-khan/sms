@extends('layouts.app')
@section('title')
    Edit Group
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Edit Group</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update.group') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $groups->id }}">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="group_name"
                                        value="{{ $groups->group_name }}" placeholder="Group Name">
                                    <label>Group Name</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="description"
                                        value="{{ $groups->description }}" placeholder="Description">
                                    <label>Description</label>
                                </div>
                                <div class="mt-4 mb-0">
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
