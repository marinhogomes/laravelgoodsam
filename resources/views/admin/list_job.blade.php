@extends('admin.app')

@section('form_title')
Jobs Dashboard
@endsection

@section('content')
	<section class="section">

			<nav class="level">
			  <!-- Left side -->
			  <div class="level-left">
			    <div class="level-item">
			      <div class="field has-addons">
			        <p class="control">
			          <input class="input" type="text" placeholder="Find a user">
			        </p>
			        <p class="control">
			          <button class="button">
			            Search
			          </button>
			        </p>
			      </div>
			    </div>
			  </div>
			  <!-- Right side -->
			  <div class="level-right">
			    <p class="level-item"><a class="button is-success" href="{{action('JobController@create')}}">Create Job</a></p>
			  </div>

			</nav>


	        <div class="columns">
	        	<div class="column is-12">
					<table class="table" style="width: 100%">
					  <thead>
					    <tr>
					      <th>Id</th>
					      <th>Title</th>
					      <th>City</th>
					      <th>Country</th>
					      <th>Category</th>
					      <th>Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  @foreach($jobs as $job)
					  	<tr>
					  		<th>{{$job->id}}</th>
					  		<th>{{$job->title}}</th>
					  		<th>{{$job->city}}</th>
					  		<th>{{$job->country}}</th>
					  		<th>{{$job->category['name']}}</th>
					  		<th><a class="button" href="{{route('job.edit',['job' => $job->id])}}">Editar</a></th>
					  	</tr>
					  	@endforeach
					  </tbody>
				  </table>
				</div>
	        </div>

	</section>
@endsection