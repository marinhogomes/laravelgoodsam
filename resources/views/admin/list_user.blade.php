@extends('admin.app')

@section('form_title')
Users Dashboard
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
			    <p class="level-item"><a class="button is-success" href="{{action('UserController@create')}}">Create User</a></p>
			  </div>

			</nav>


	        <div class="columns">
	        	<div class="column is-12">
					<table class="table" style="width: 100%">
					  <thead>
					    <tr>
					      <th>Id</th>
					      <th>Username</th>
					      <th>City</th>
					      <th>State</th>
					      <th>Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<tr>
					  		<th>12</th>
					  		<th>marinho</th>
					  		<th>Los Angeles</th>
					  		<th>California</th>
					  		<th><a class="button">Editar</a></th>
					  	</tr>
					  </tbody>
				  </table>
				</div>
	        </div>

	</section>
@endsection