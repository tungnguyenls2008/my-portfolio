<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $aboutMe->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $aboutMe->description }}</p>
</div>

<!-- Activated Field -->
<div class="form-group">
    {!! Form::label('activated', 'Activated:') !!}
    <p>{{ $aboutMe->activated }}</p>
</div>

