<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;

use Auth;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('roles.job');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $job = new Job();
        $job->user_id = Auth::user()->id;
        $job->company_name = $request->input('company_name');
        $job->job_post = $request->input('job_post');
        $job->requirements = $request->input('requirements');
        $job->save();

        return view('roles.job');
    }

    public function list(Request $request)
    {
        $jobs = Job::all();
        // return redirect()->route('roles.job.list');
        return view('roles.job', ['jobs'=>$jobs]);
    }
    public function delete($id)
    {
        $job = Job::Find($id);

        if ($job) {
            $job->delete();
        }
        return redirect()->route('roles.job.list'); // view('roles.job');
    }

}
