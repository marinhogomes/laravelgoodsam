@extends('admin.app')

@section('form_title')
Category Dashboard
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
					      <th>Name</th>
					      <th>Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($categories as $category)
					  	<tr>
					  		<th>{{$category->id}}</th>
					  		<th>{{$category->name}}</th>
					  		<th><a class="button" href="{{action('CategoryController@edit', ['category' => $category->id])}}">Editar</a> <a class="button" href="">Deletar</a></th>
					  	</tr>
					  	@endforeach
					  </tbody>
				  </table>
				</div>
	        </div>

	</section>
@endsection