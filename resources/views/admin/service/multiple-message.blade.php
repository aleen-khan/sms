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
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Message</h3></div>
                        <div class="card-body">
                            <form action="{{route('multiple.message')}}" method="post">
                                @csrf
                                
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            
                                            <label>Choose Multiple Group:</label>
                                            
                                            <select name="mul_group[]" id="mul_group">
                                                
                                                
                                                @if (count($messages) > 0)

                                                    @foreach($messages as $grouping)
                                                    
                                                    <option value="{{ $grouping['id'] }}">{{ $grouping['group_name'] }}</option>
                                                    
                                                    @endforeach
                                                    
                                                @endif
                                                                                                                                                                                      
                                            </select>
                                                
                                                
            
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
@push('js')
    <script>
        
    </script>
    
@endpush
