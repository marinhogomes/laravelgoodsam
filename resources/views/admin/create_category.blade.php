@extends('admin.app')

@section('form_title')
Categories Dashboard
@endsection

@section('content')
<section class="section">
        <div class="columns is-mobile is-multiline">
          <div class="column is-full">
            {!! Form::open(['url' => action('CategoryController@store')]) !!}
              @include('admin.form_category',['button' => 'Create'])
              {!! Form::close() !!}
          </div>
        </div>
    </section>
@endsection