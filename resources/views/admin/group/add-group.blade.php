@extends('layouts.app')
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
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="group_name"  placeholder="Group Name">
                                    <label>Group Name</label>                                        
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="description" placeholder="Description"></textarea>
                                    <label>Description</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Create</button>
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

