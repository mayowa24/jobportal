@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-right">
        <div class="col-md-2">
        <div class="container">
            <a href="#" class="btn btn-success btn-md form-control">Update Profile</a>
        </div>
        </div>

        <div class="col-md-10">

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4">
                            <div class="container">
                                <img src="{{ asset('/image/image1.png')}}" alt="computer">
                            </div>
                        </div>

                         <div class="col-md-8">
                            <div class="container"> <p><h3>
                            Welcome to Ekiti Online Job Portal. Are you a resident of Ekiti, or are you planning to relocate to Ekiti or you are an indigene searching for job? You dont need to be roaming about the street again in searching for job, we are here to show you where their is vacancy in Ekiti State generally and have the opportunity to apply</h3></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                <div class="row">
                @foreach($jobs as $job)
                    <div class="col-md-4">

                    <p><label><strong>Company Name:- </strong></label>{{$job->company_name}}</p>
                    <p><label><strong>Post:- </strong></label>{{$job->job_post}}</p>
                    <p><label><strong>Requirements:- </strong></label>{{$job->requirements}}</p>
                    <a href="#" class="btn btn-md btn-info">Apply</a>

                    </div>
                    @endforeach
                </div>




                </div>

            </div>
        </div>
    </div>
</div>
@endsection
