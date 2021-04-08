<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $aboutMeV2->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $aboutMeV2->last_name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $aboutMeV2->description }}</p>
</div>

<!-- Activated Field -->
<div class="form-group">
    {!! Form::label('activated', 'Activated:') !!}
    <p>{{ $aboutMeV2->activated }}</p>
</div>

