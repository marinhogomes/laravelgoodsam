<div class="field">
  <label class="label">Name</label>
  <div class="control">
  {!! Form::text('name',null,['class' => 'input', 'placeholder' => 'Category name']) !!}
  </div>
</div>

<div class="field">
  <label class="label">Category</label>
  <div class="control">
    <div class="select">
      {!! Form::select('category_id',$categories,'') !!}
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