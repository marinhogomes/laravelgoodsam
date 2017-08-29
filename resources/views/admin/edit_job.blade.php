@extends('admin.app')

@section('form_title')
Jobs Dashboard
@endsection

@section('content')
<section class="section">
        <div class="columns is-mobile is-multiline">
          <div class="column is-full">
            {!! Form::model($job, ['route' => ['job.update', $job->id]]) !!}
              @include('admin.form_job',['button' => 'Create'])
              {!! Form::close() !!}
          </div>
        </div>
    </section>
@endsection