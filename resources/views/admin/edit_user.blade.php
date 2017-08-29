@extends('admin.app')

@section('form_title')
Users Dashboard
@endsection

@section('content')
    <section class="section">
        <div class="columns is-mobile is-multiline">
          <div class="column is-full">
            {!! Form::open(['url' => action('UserController@store')]) !!}
              <div class="field">
                <label class="label">Name</label>
                <div class="control">
                {!! Form::text('name', '',['class' => 'input', 'placeholder' => 'Inform your name']) !!}
                </div>
              </div>

              <div class="field">
                <label class="label">Username</label>
                <div class="control">
                {!! Form::text('username', '', ['class' => 'input', 'placeholder' => 'Informe username']) !!}
                </div>
              </div>

              <div class="field">
                <label class="label">Password</label>
                <div class="control">
                {!! Form::text('password', '', ['class' => 'input']) !!}
                </div>
              </div>

              <div class="field">
                <label class="label">Email</label>
                <div class="control">
                {!! Form::text('email', '', ['class' => 'input']) !!}
                </div>
              </div>

              <div class="field">
                <label class="label">City</label>
                <div class="control">
                {!! Form::text('city', '',['class' => 'input']) !!}
                </div>
              </div>

              <div class="field">
                <label class="label">State</label>
                <div class="control">
                {!! Form::text('state', '', ['class' => 'input']) !!}
                </div>
              </div>

              <div class="field">
                <label class="label">Country</label>
                <div class="control">
                  <div class="select">
                    {!! Form::select('country', 
                    ["Albania",
                    "Andorra",
                    "Armenia",
                    "Austria",
                    "Azerbaijan",
                    "Belarus",
                    "Belgium",
                    "Bosnia and Herzegovina",
                    "Bulgaria",
                    "Croatia",
                    "Cyprus",
                    "Czech Republic",
                    "Denmark",
                    "Estonia",
                    "Finland",
                    "France",
                    "Georgia",
                    "Germany",
                    "Greece",
                    "Hungary",
                    "Iceland",
                    "Ireland",
                    "Italy",
                    "Kosovo",
                    "Latvia",
                    "Liechtenstein",
                    "Lithuania",
                    "Luxembourg",
                    "Macedonia",
                    "Malta",
                    "Moldova",
                    "Monaco",
                    "Montenegro",
                    "The Netherlands",
                    "Norway",
                    "Poland",
                    "Portugal",
                    "Romania",
                    "Russia",
                    "San Marino",
                    "Serbia",
                    "Slovakia",
                    "Slovenia",
                    "Spain",
                    "Sweden",
                    "Switzerland",
                    "Turkey",
                    "Ukraine",
                    "United Kingdom",
                    "Vatican City"],null) 
                    !!}
                  </div>
                </div>
              </div>

              <!--
              <div class="field">
                <label class="label">Category</label>
                <div class="control">
                <div class="select">
                  <select>
                  <option>Select dropdown</option>
                  <option value="1">Marinho</option>
                  <option value="2">Gomes</option>
                  <option value="2">Reinaldo</option>
                  </select>
                </div>
                </div>
              </div>
              -->

              <div class="field is-grouped">
                  <div class="control">
                    <button class="button is-primary">Create</button>
                  </div>
                  <div class="control">
                    <button class="button is-link">Cancel</button>
                  </div>
              </div>
              {!! Form::close() !!}
          </div>
        </div>
    </section>
@endsection