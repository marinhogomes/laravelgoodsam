<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use App\models\Ong;
use View;

class JobsController extends Controller
{
    
    public function GetJobs()
    {
    	$jobs = Job::limit(10)->skip(0)->get();
        return View::make('jobs_listing',compact('jobs'));
    }

    public function GetJob($id)
    {
    	$job = Job::find($id);
        return View::make('job',compact('id','job'));
    }

    public function GetNonprofits()
    {
    	return View::make('nonprofits');
    }

    public function GetVolunteers()
    {
    	return View::make('volunteers');
    }

    public function GetCategory($name)
    {
        return View::make('jobs_listing',compact('name'));
    }
}