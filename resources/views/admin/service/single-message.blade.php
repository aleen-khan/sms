{{-- @extends('admin.master') --}}
@extends('layouts.app')
@section('title')
    Send Sms
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Message</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('single.message') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="group[]" id="group"
                                        aria-label="Default select example">
                                        <option selected>Select Group</option>
                                        @if (count($messages) > 0)
                                            @foreach ($messages as $grouping)
                                                <option value="{{ $grouping['id'] }}">{{ $grouping['group_name'] }}</option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <label>Choose a Group:</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="group_member_id" id="mySelect"
                                        aria-label="Default select example">
                                        <option selected>Select Contact</option>
                                        @foreach ($messages as $member)
                                            <option value="{{ $member['id'] }}">{{ $member['contact_name'] }}</option>
                                        @endforeach
                                    </select>

                                    <label>Choose a Contact:</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="number" placeholder="Number">
                                    <label>Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                    <label>SMS Body</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <button type="submit" class="btn btn-primary mb-1">Send</button>
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
@push('js')
    <script>
        // asign data a variable
        let members = eval("{{ Js::from($members) }}");
        console.log(members)


        jQuery(document).ready(function() {
            jQuery('#group').change(function(e) {
                console.log(e.target.value)
                let id = e.target.value;
                jQuery.ajax({

                    url: "group-members/" + id,
                    type: 'get',
                    success: function(result) {
                        // console.log('hello')
                        console.log(result)
                        $('#mySelect').html('')
                        $.each(result, function(i, item) {
                            $('#mySelect').append($('<option>', {
                                value: item.id,
                                text: item.contact_name

                                // + ' ('+ item.contact_number + ')'
                            }));
                        });
                    }
                })
            });
        })
    </script>
@endpush
