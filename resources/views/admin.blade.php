@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin page</div>
                    <div class="card-body">
                        about admin page
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Admin Role</div>
                    <div class="card-body">
                        <a href="{{ route('roles.company')}}" class="btn btn-md btn-info form-control">{{__('Register Company')}}</a>
                        <a href="{{ route('roles.job.index')}}" class="btn btn-md btn-default form-control">{{__('Post Job')}}</a>
                        <a href="#" class="btn btn-md btn-success form-control">View Applicant Profile</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

        </div>
    </div>
@endsection
