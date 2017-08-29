@extends('admin.app')

@section('form_title')
Categories Dashboard
@endsection

@section('content')
<section class="section">
        <div class="columns is-mobile is-multiline">
          <div class="column is-full">
            {!! Form::model($category, ['route' => ['category.update', $category->id]]) !!}
              @include('admin.form_category',['button' => 'Update'])
            {!! Form::close() !!}
          </div>
        </div>
    </section>
@endsection