<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $uploadDatatable->name }}</p>
</div>

<!-- Uri Field -->
<div class="form-group">
    {!! Form::label('uri', 'Uri:') !!}
    <p>{{ $uploadDatatable->uri }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $uploadDatatable->type }}</p>
</div>

<!-- Belongs To Table Field -->
<div class="form-group">
    {!! Form::label('belongs_to_table', 'Belongs To Table:') !!}
    <p>{{ $uploadDatatable->belongs_to_table }}</p>
</div>

<!-- Belongs To Id Field -->
<div class="form-group">
    {!! Form::label('belongs_to_id', 'Belongs To Id:') !!}
    <p>{{ $uploadDatatable->belongs_to_id }}</p>
</div>

