<div class="field">
  <label class="label">Title</label>
  <div class="control">
  {!! Form::text('title',null,['class' => 'input', 'placeholder' => 'Category name']) !!}
  </div>
</div>

<div class="field">
  <label class="label">Description</label>
  <div class="control">
    {!! Form::textarea('description',null,['class' => 'textarea']) !!}
  </div>
</div>

<div class="field">
  <label class="label">Category</label>
  <div class="control">
    <div class="select">
      {!! Form::select('category_id',$categories) !!}
    </div>
  </div>
</div>

<div class="field">
  <label class="label">City</label>
  <div class="control">
  {!! Form::text('city',null,['class' => 'input', 'placeholder' => 'Inform city']) !!}
  </div>
</div>

<div class="field">
  <label class="label">State</label>
  <div class="control">
  {!! Form::text('state',null,['class' => 'input', 'placeholder' => 'Inform state']) !!}
  </div>
</div>

<div class="field">
  <label class="label">Country</label>
  <div class="control">
    <div class="select">
    {!! Form::select('country',['Germany' => 'Germany','Netherlands' => 'Netherlands','France' => 'France']) !!}
    </div>
  </div>
</div>

<div class="field is-grouped">
    <div class="control">
      <button class="button is-primary">{{$button}}</button>
    </div>
    <div class="control">
      <button class="button is-link">Cancel</button>
    </div>
</div>