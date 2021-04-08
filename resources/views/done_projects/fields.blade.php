<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    {!! Form::text('short_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Long Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('long_desc', 'Long Desc:') !!}
    {!! Form::text('long_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('doneProjects.index') }}" class="btn btn-secondary">Cancel</a>
</div>
