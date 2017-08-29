<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use View;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return View::make('admin.list_job',compact('jobs'));
    }

    public function create()
    {
        $categories = Category::pluck('name','id');
        return View::make('admin.create_job',compact('categories'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $newJob = Job::create(
            [
             'title' => $input['title'],
             'description' => $input['description'],
             'city' => $input['city'],
             'state' => $input['state'],
             'country' => $input['country'],
             'category_id' => $input['category_id']
             ]
        );

        $newJob->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $job = Job::find($id);
        $categories = Category::pluck('name','id');
        return View::make('admin.edit_job',compact('job','categories'));
    }

    public function update(Request $request, $id)
    {
        $job = Job::find($id);

        $input = $request->all();

        $job->title = $input['title'];
        $job->description = $input['description'];
        $job->category_id = $input['category_id'];
        $job->city = $input['city'];
        $job->state = $input['state'];
        $job->country = $input['country'];

        $job->save();
    }

    public function destroy($id)
    {
        //
    }
}
