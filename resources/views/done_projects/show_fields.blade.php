<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $doneProject->name }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $doneProject->image }}</p>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    <p>{{ $doneProject->short_desc }}</p>
</div>

<!-- Long Desc Field -->
<div class="form-group">
    {!! Form::label('long_desc', 'Long Desc:') !!}
    <p>{{ $doneProject->long_desc }}</p>
</div>

