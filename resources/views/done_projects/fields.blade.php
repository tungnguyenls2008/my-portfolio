<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo upload Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    <input type="file" name="images[]" id="images" multiple class="form-control" accept="image/*">
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
