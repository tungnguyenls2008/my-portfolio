<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<!-- Photo upload Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    <input type="file" name="images[]" id="images" multiple class="form-control" accept="image/*">
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
</div>
