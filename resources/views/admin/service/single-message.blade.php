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
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Message</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('single.message') }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            
                                            <label>Choose a Group:</label>

                                            <select name="group[]" id="group">

                                                <option value="">Select Group</option>

                                                @if (count($messages) > 0)

                                                @foreach ($messages as $grouping)
                                                    <option value="{{ $grouping['id'] }}">{{ $grouping['group_name'] }}</option>
                                                @endforeach

                                                @endif

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="card form-floating mb-3 mb-md-0">

                                            <label>Choose a Contact:</label>

                                            <select name="group_member_id" id="mySelect">

                                                <option value="">Select Contact</option>

                                                @foreach ($messages as $member)
                                                    <option value="{{ $member['id'] }}">{{ $member['contact_name'] }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label>Number</label>
                                            <input class="form-control" name="number" type="text"
                                                placeholder="Number" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mt-3 mb-md-0">
                                            <label>SMS Body</label>
                                            <textarea class="form-control" name="message" type="textarea" placeholder="Message"></textarea>
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
