@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Job posting here</div>
                <div class="card-body">

                    <form action="{{ route('roles.save')}}" method="Post">
                        @csrf
                        <div class="form-group">
                            <label for="company">Company's Name</label>
                            <input type="text" class="form-control" id = "company_name" name = "company_name" placeholder="The Name of the Company">
                        </div>

                        <div class="form-group">
                            <label for="company">Position</label>
                            <input type="text" class="form-control" id = "job_post" name = "job_post" placeholder="The Post Vacant">
                        </div>

                        <div class="form-group">
                            <label for="company">Requirements</label>
                            <textarea name="requirements" id="requirements" cols="30" rows="10" class="form-control" placeholder="Requirements"></textarea>
                        </div>

                        <div class="row">

                        <div class="col-md-2">
                        <button type="submit" class="btn btn-info form-control">Post</button>
                        </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Posted Jobs</div>
                <div class="card-body">
                @foreach($jobs as $job)
                    <div class="container">

                        <Strong><p>{{$job->company_name}}</p></Strong>
                        <p><strong>Post:</strong> {{$job->job_post}}</p>
                        <p><strong>Requirements:</strong>{{$job->requirements}}</p>
                        <a href="{{ route('roles.delete', ['id' => $job->id]) }}" class="btn btn-danger btn-md">{{__('Remove')}}</a>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
