<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $upload->name }}</p>
</div>

<!-- Uri Field -->
<div class="form-group">
    {!! Form::label('uri', 'Uri:') !!}
    <p>{{ $upload->uri }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $upload->type }}</p>
</div>

<!-- Belongs To Field -->
<div class="form-group">
    {!! Form::label('belongs_to', 'Belongs To:') !!}
    <p>{{ $upload->belongs_to }}</p>
</div>

